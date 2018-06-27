<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="menu">
    <div class="ingriedent-add">
        <!-- ingredient form -->
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <!-- input ingredient -->
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="ingredient" type="text" class="form-control" name="ingredient" placeholder="ingredient">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- input hoeveelheid -->
                        <div class="input-group margin">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="hoeveelheid" type="text" class="form-control" name="hoeveelheid" placeholder="hoeveelheid">
                            <!-- input eenheid -->
                            <select name="eenheid" class="form-control" id="sel1">
                                <option value="stuks">stuk(s)</option>
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
                    <td><button type="submit" class="btn btn-primary" name="add_ingredient">Voeg Toe!</button></td>
                </tr>
            </table>
        </form>
    </div>
</div>

</body>
</html>