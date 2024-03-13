<?php
include_once 'config.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
    header("Location: signup.php?error=emptyfields");
    exit();
} elseif ($password !== $confirm_password) {
    header("Location: signup.php?error=passwordcheck&username=" . $username . "&email=" . $email);
    exit();
} else {
    $sql = "SELECT * FROM users WHERE username=? OR email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: signup.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if ($resultCheck > 0) {
            header("Location: signup.php?error=usertaken");
            exit();
        } else {
            $sql = "INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: signup.php?error=sqlerror");
                exit();
            } else {
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                mysqli_stmt_execute($stmt);
                header("Location: signup.php?signup=success");
                exit();
            }
        }
    }
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
