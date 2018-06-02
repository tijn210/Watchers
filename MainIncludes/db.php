<?php
//connectie met de database
    $db ="mysql:host=localhost;dbname=wwatchers;port=3306";
    $user = "root";
    $pass = "";
    $pdo = new PDO($db, $user, $pass);