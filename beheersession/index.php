<?php
//INCLUDES
    //include 'Includes/sidebar.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Beheerders</title>
    <link href="Css/style.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/js/bootstrap.min.js" rel="stylesheet">
    <link href="../bootstrap/js/bootstrap.bundle.min.js" rel="stylesheet">
</head>
<body>
<div class="menu">
    <div class="ingriedent-add">
        <form action="" method="post">
            <table>
                <tr>
                    <!--                <td>login</td>-->
                    <td>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="ingredient" type="text" class="form-control" name="ingredient" placeholder="ingredient">
                        </div>
                    </td>
                </tr>
                <tr>
                    <!--                <td>Password</td>-->
                    <td>
                        <div class="input-group margin">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="hoeveelheid" type="text" class="form-control" name="hoeveelheid" placeholder="hoeveelheid">
                            <select name="eenheid" class="form-control" id="sel1">
                                <option value="mg">mg</option>
                                <option value="g">g</option>
                                <option value="kg">kg</option>
                                <option value="ml">ml</option>
                                <option value="cl">cl</option>
                                <option value="l">l</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn btn-primary" name="add">Voeg Toe!</button></td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>