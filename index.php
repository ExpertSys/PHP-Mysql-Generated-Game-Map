<?php
    require_once("inc/db.php");
    require_once("inc/map.php");

    $db = new Database();
    $map = new Map($_POST['x'], $_POST['y']);
    $map->createMap();
    $map->battle();
    $map->move();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript">
</script>
</head>
<body>
<meta http-equiv="refresh" content="3">
</body>
</html>
