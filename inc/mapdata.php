<?php
    require_once("inc/db.php");
    require_once("inc/map.php");

    $map = new Map($_POST['x'], $_POST['y']);
    $map->createMap();
    $map->battle();
    $map->move();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>



</body>
</html>
