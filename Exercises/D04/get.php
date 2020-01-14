<?php




var_dump($_GET);

?>



<!DOCTYPE html>
<html lan="en">
<head>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>GET Page</title>
<body>
<h1>GET Page</h1>
<a href="<?= $_SERVER['PHP_SELF']?>">Nothing</a>
<a href="<?= $_SERVER['PHP_SELF']?>?color=Blue">Blue</a>
</html>
</body>