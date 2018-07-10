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
        $_SESSION['user'] = array("firstname" => $result['firstname'], "lastname" => $result['lastname'], "id" => $result['id']);

        if($result['id'] == 1) {
            header('Location: session/index.php');
        } elseif ($result['id'] == 1337) {
            header('Location: ../beheersession/index.php');
        }
    }

//WHEN LOGIN IS INCORRECT
    else {
        echo "Foutieve invoer";
    }
}

if(isset($_POST["register"])){
    echo "Registratie Voltooid!";
}
?>