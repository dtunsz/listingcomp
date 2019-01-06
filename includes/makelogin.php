<?php
if (isset($_POST['login-submit'])) {

    require '../config/dbcon.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    }else {
        $sql = "SELECT * FROM users WHERE email=?";
        $stmt = mysqli_stmt_init($connection);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)){
                $passCheck = password_verify($password, $row['pass']);
                if($passCheck == false) {
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                }elseif($passCheck == true) {
                    session_start();
                    $_SESSION['useremail'] = $row['email'];
                    header("Location: ../index.php");
                    exit();
                }else {
                    ("Location: ../index.php?error=loginerror");
                }
            }
        }
    }
}
else {
    header("Location: ../index.php");
}