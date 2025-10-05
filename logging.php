<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // ===== SIGN UP PROCESS ===== //
    if (isset($_POST['signup'])) {
        $first_name = trim($_POST['first_name']);
        $last_name = trim($_POST['last_name']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $confirm = $_POST['confirm_password'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = "Invalid email format.";
            header("Location: index.php#signup");
            exit();
        }

        if ($password !== $confirm) {
            $_SESSION['error'] = "Passwords do not match.";
            header("Location: index.php#signup");
            exit();
        }

        // Check existing email //
        $check = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $check->bind_param("s", $email);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            $_SESSION['error'] = "Email already exists.";
            header("Location: index.php#signup");
            exit();
        }

        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $role = 'user';

        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password, role) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $first_name, $last_name, $email, $hashed, $role);

        if ($stmt->execute()) {
            $_SESSION['success'] = "Account created successfully! Please log in.";
            header("Location: index.php#signin");
        } else {
            $_SESSION['error'] = "Something went wrong. Please try again.";
            header("Location: index.php#signup");
        }
        exit();
    }

    // ===== SIGN IN PROCESS ===== //
    if (isset($_POST['signin'])) {
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT id, first_name, role, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                $_SESSION['id'] = $user['id'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['role'] = $user['role'];

                if ($user['role'] === 'admin') {
                    header("Location: dashboard_admin.php");
                } elseif ($user['role'] === 'super_admin') {
                    header("Location: dashboard_super_admin.php");
                } else {
                    header("Location: dashboard_user.php");
                }
                exit();
            } else {
                $_SESSION['error'] = "Incorrect password.";
            }
        } else {
            $_SESSION['error'] = "No account found with that email.";
        }

        header("Location: index.php#signin");
        exit();
    }
}
?>
