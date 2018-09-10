<?php

// info from registration form
    $firstname = ucwords($_POST["firstname"]);
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $user_id = 1;

    if(isset($_POST["register"])) {
// DB include
        include 'db.php';
//Register Statements
        $usercheck = $pdo->prepare("SELECT `username` FROM `user` WHERE username=:email");
        $register = $pdo->prepare("INSERT INTO `user` (`Username`, `password`, `userid`, `firstname`, `lastname`) VALUES (:email, :password, :userid, :firstname, :lastname);");

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if (!empty($firstname && $lastname && $email && $password)) {
                $usercheck->bindParam(':email', $email);
                $usercheck->execute();
                if ($usercheck->rowCount() == 0) {
                    $register->bindParam(':email', $email);
                    $register->bindParam(':password', $password);
                    $register->bindParam(':userid', $user_id);
                    $register->bindParam(':firstname', $firstname);
                    $register->bindParam(':lastname', $lastname);
                    $register->execute();
                    header("Location: ../index.php?msg=2");
                } else {
                    header("Location: ../index.php?msg=5");
                }
            } else {
                header("Location: ../index.php?msg=4");
            }
        } else {
            header("Location: ../index.php?msg=4");
        }
    }

    $pdo = NULL;
?>