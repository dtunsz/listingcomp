<?php
    if(isset($_POST['register-submit'])) {

        require '../config/dbcon.php';

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repeatPassword = $_POST['re-password'];
        $phone = $_POST['phone'];
        $url = $_POST['url'];
        $address = $_POST['address'];
        $hours = $_POST['hours'];
        $category = $_POST['category'];
        $about = $_POST['about'];

        if (empty($name) || empty($email) || empty($password) || empty($repeatPassword) || empty($phone) || empty($url) || empty($address) || empty($hours) || empty($category) || empty($about)) {
            header("Location: ../register.php?error=emptyfields&name".$name."&email=".$email);
            exit();
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../register.php?error=invalidemail&name=".$name);
            exit();
        } elseif ($password !== $repeatPassword) {
            header("Location: ../register?error=passwordcheckname=". $name."&email=".$email);
            exit();
        } else {
            $sql = "SELECT email FROM users WHERE email= ?";
            $stmt = mysqli_stmt_init($connection);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../register.php?error=databaseerror");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
                if($resultCheck > 0) {
                    header("Location: ../register.php?error=emailaddressalreadyexists&email=".$email);
                    exit();
                } else {
                    $sql = "INSERT INTO users (name, email, pass, phone, url, address, hours, category, about) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($connection);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: ../register.php?error=storageerror");
                        exit();    
                    } else {
                        $hashedPassword = password_hash ($password, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "sssssssss", $name, $email, $hashedPassword, $phone, $url, $address, $hours, $category, $about);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../register.php?register=success");
                        exit();
                    }
                    
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($connection);
    }
    else {
       header("Location: ../register.php");
       exit(); 
    }
    