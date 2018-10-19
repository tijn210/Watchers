<?php
//SET SESSION IF LOGGED IN
session_start();

//    if($_SERVER['REMOTE_ADDR'] == "77.251.195.178" || $_SERVER['REMOTE_ADDR'] == "127.0.0.1"){
//        $_SESSION["user"] = array("firstname" => "Thuis", "lastname" => "Account", "id" => "1337");
//    }

    if(isset($_SESSION['user'])) {
        header("Location: beheersession/index.php");
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127080488-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127080488-1');
</script>
    <meta charset="UTF-8">
    <title>Healthy food</title>
    <link href="../beheersession/Css/style.css" rel="stylesheet">

<!--  BOOTSTRAP LINKS, ONLY WORKS WHEN YOU'RE ONLINE  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!--  BACKGROUND IMAGE IF LOGGED IN AND IF NOT LOGGED IN  -->
    <style>
        body {
            background-image: url("images/background.jpg");
            Background-color:Black;
            background-repeat:no-repeat;
            background-size:cover;
            text-align:center;
        }
    </style>
</head>
<body>

</body>
</html>