<?php
//SET SESSION IF LOGGED IN
//    session_start();

//INCLUDES
    include_once 'MainIncludes/header.php';

//SQL SCRIPTS
    $login = $pdo->prepare("SELECT * FROM `user` WHERE Username=? AND password=?");

//LOGIN SCRIPT
    if(isset($_POST["login"])){

//SQL LOGIN DEFINITION AND EXECUTION
        $username = $_POST["username"];
        $passwd = $_POST["password"];
        $login->execute (array("$username","$passwd"));

//WHEN LOGIN IS CORRECT
        if($login->rowCount() == 1) {
            $result = $login->fetch();
            $_SESSION['user'] = array($result['firstname'],$result['lastname'],$result['id']);
            if($result['id'] == 1) {
                header('Location: session/index.php');
            } elseif ($result['id'] == 1337) {
                header('Location: beheersession/index.php');
            }

            //echo "Correcte Invoer";
        }
//WHEN LOGIN IS INCORRECT
        else {
            echo "Foutieve invoer";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weight Watchers</title>
    <link href="MainCss/style.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/js/bootstrap.min.js" rel="stylesheet">
    <link href="bootstrap/js/bootstrap.bundle.min.js" rel="stylesheet">
</head>
<body >
<div class="loginplace loginlook">
    <form action="" method="post">
        <table>
            <tr>
                <!--                <td>login</td>-->
                <td>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="username" type="text" class="form-control" name="username" placeholder="username">
                    </div>
                </td>
            </tr>
            <tr>
                <!--                <td>Password</td>-->
                <td>
                    <div class="input-group margin">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </td>
            </tr>
            <tr>
                <td><button type="submit" class="btn btn-primary" name="login">Login!</button></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>