<!-- Gemaakt door Robin ten Hoven -->
<head>
    <meta charset="UTF-8">
    <link href="../Css/side_menu.css" rel="stylesheet">
    <link href="../../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../bootstrap/js/bootstrap.min.js" rel="stylesheet">
    <link href="../../bootstrap/js/bootstrap.bundle.min.js" rel="stylesheet">
</head>
<body>
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
                <img id="profilePictureSide" src="images/profile-icon.png">
        </li>
        <?php
            echo "<li>"."<a href='index.php'><i class='fa fa-columns'></i> Dashboard </a>"."</li>";
            echo "<li>"."<a href='index.php'><i class='fa fa-columns'></i> Add ingredient </a>"."</li>";
            echo "<li>"."<a href='mkdish.php'><i class='fa fa-columns'></i> Add dish </a>"."</li>";
            echo "<li>"."<a href='settings.php'><i class='fa fa-users'></i> Settings </a>"."</li>";
            echo "<li>"."<a href='logout.php'><i class='fa fa-users'></i> Log Out </a>"."</li>";

        ?>
    </ul>
</div>
</body>

<style>
    #sidebar-wrapper {
        background-color: green;
    }
</style>