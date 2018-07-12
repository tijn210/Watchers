<?php
//SET SESSION IF LOGGED IN
    session_start();

//INCLUDES
include 'db.php';

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
        $_SESSION['user'] = array("firstname" => $result['firstname'], "lastname" => $result['lastname'], "userid" => $result['userid'], "ID" => $result['ID']);

        if($result['userid'] == 1) {
            header('Location: session/index.php');
        } elseif ($result['userid'] == 1337) {
            header('Location: ../beheersession/index.php');
        }
    }

//WHEN LOGIN IS INCORRECT
    else {
        header('Location: ../index.php?msg=1');
    }
}

    $pdo = NULL;
?>