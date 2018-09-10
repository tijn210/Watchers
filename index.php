<?php
 include_once 'MainIncludes/header.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="MainCss/style.css" rel="stylesheet">
</head>
<body>
<div class="loginplace loginlook divbg">
    <form action="MainIncludes/actions.php" method="post">
        <table>
        <?php
	if(isset($_GET["msg"])) {
		if($_GET["msg"] == 1) {
			echo "<tr>";
				echo "<td>";
					echo "<div class=\"alert alert-danger\" role=\"alert\">
                                Login mislukt!
                          </div>";
				echo "</td>";
			echo "</tr";
		}
		if ($_GET["msg"] == 2) {
            echo "<tr>";
                echo "<td>";
                    echo "<div class=\"alert alert-success\" role=\"alert\">
                              Account succesvol aangemaakt!
                          </div>";
                echo "</td>";
            echo "</tr";
		}
        if ($_GET["msg"] == 3) {
            echo "<tr>";
                echo "<td>";
                    echo "<div class=\"alert alert-success\" role=\"alert\">
                                  Succesvol uitgelogd!
                          </div>";
                echo "</td>";
            echo "</tr";
        }
        if($_GET["msg"] == 4) {
       		echo "<tr>";
        		echo "<td>";
        			echo "<div class=\"alert alert-danger\" role=\"alert\">
        					Registratie mislukt, probeer opnieuw!
        				  </div>";
        		echo "</td>";
        	echo "</tr";
        }
        if($_GET["msg"] == 5) {
            echo "<tr>";
                echo "<td>";
                    echo "<div class=\"alert alert-danger\" role=\"alert\">
        					E-mailadres bestaat al.
        				  </div>";
                echo "</td>";
            echo "</tr";
        }
	}
?>
            <tr>
                <!--                <td>login</td>-->
                <td>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="username" type="text" class="form-control" name="username" placeholder="Username" required="">
                    </div>
                </td>
            </tr>
            <tr>
                <!--                <td>Password</td>-->
                <td>
                    <div class="input-group margin">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required="">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" class="btn btn-primary" name="login">Login!</button>
    </form>
    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#RegisterModal">
                        Registreer!
                    </button>
                </td>
            </tr>
        </table>


<!-- Modal -->
        <form action="MainIncludes/register.php" method="post">
            <div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Registratie</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Voornaam" name="firstname" required="">
                            </div>
                            <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Achternaam" name="lastname" required="">
                            </div>
                            <div class="md-form mb-5">
                                <i class="fa fa-envelope prefix grey-text"></i>
                                <input type="email" id="orangeForm-email" class="form-control validate" placeholder="E-mail" name="email" required="">
                            </div>

                            <div class="md-form mb-4">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" id="orangeForm-pass" class="form-control validate" placeholder="Wachtwoord" name="password" required="">
                            </div>

                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="submit" name="register" class="btn btn-deep-orange">Registreer!</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
</body>
</html>