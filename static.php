<?php
session_start();

// ================= DATABASE CONNECTION =================
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "secure_vote";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// ================= HELPER FUNCTION =================
function validatePassword($password) {
    $errors = [];
    if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long.";
    }
    if (!preg_match("/[0-9]/", $password)) {
        $errors[] = "Password must contain at least one number.";
    }
    if (!preg_match("/[a-zA-Z]/", $password)) {
        $errors[] = "Password must contain at least one letter.";
    }
    return $errors;
}

// ================= HANDLE FORMS =================
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // ---------- SIGN IN ----------
    if (isset($_POST["signin"])) {
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);

        $stmt = $conn->prepare("SELECT id, first_name, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $res = $stmt->get_result();
        $user = $res->fetch_assoc();

        if ($user && password_verify($password, $user["password"])) {
            $_SESSION['user'] = $user["id"];
            $_SESSION['first_name'] = $user["first_name"];
            header("Location: dashboard.php");
            exit();
        } else {
            $_SESSION['error'] = "Invalid email or password.";
            $_SESSION['tab'] = "signin";
            header("Location: index.php");
            exit();
        }
    }

    // ---------- SIGN UP ----------
    if (isset($_POST["signup"])) {
        $first = trim($_POST["first_name"]);
        $last = trim($_POST["last_name"]);
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);
        $confirm = trim($_POST["confirm_password"]);

        // confirm password
        if ($password !== $confirm) {
            $_SESSION['error'] = "Passwords do not match.";
            $_SESSION['tab'] = "signup";
            header("Location: index.php");
            exit();
        }

        // validate password
        $errors = validatePassword($password);
        if (!empty($errors)) {
            $_SESSION['error'] = implode("<br>", $errors);
            $_SESSION['tab'] = "signup";
            header("Location: index.php");
            exit();
        }

        // validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = "Invalid email format.";
            $_SESSION['tab'] = "signup";
            header("Location: index.php");
            exit();
        }

        // Gmail only
        if (!preg_match("/^[a-zA-Z0-9._%+-]+@gmail\.com$/", $email)) {
            $_SESSION['error'] = "Only Gmail addresses are allowed.";
            $_SESSION['tab'] = "signup";
            header("Location: index.php");
            exit();
        }

        // check if email exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $res = $stmt->get_result();
        if ($res->num_rows > 0) {
            $_SESSION['error'] = "Email already registered.";
            $_SESSION['tab'] = "signup";
            header("Location: index.php");
            exit();
        }

        // insert new user
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $first, $last, $email, $hashed);

        if ($stmt->execute()) {
            $_SESSION['user'] = $stmt->insert_id;
            $_SESSION['first_name'] = $first;
            header("Location: dashboard.php");
            exit();
        } else {
            $_SESSION['error'] = "Registration failed. Try again.";
            $_SESSION['tab'] = "signup";
            header("Location: index.php");
            exit();
        }
    }
}

$conn->close();
?>