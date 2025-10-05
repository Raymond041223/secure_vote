<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
  header("Location: ../index.html");
  exit;
}
echo "<h1>Welcome Admin {$_SESSION['name']}!</h1>";
?>
