<?php
var_dump($_GET);
$color = '';
if (array_key_exists('color', $_GET)) {
    $color = $_GET['color'];
} 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET Page</title>
	<style>
	body{
		background-color: <?=  $color ?>;
	}
	</style>

</head>
<body>
    <h1>GET Page</h1>
    <a href="<?= $_SERVER['PHP_SELF'] ?>">Nothing</a>
    <a href="<?= $_SERVER['PHP_SELF'] ?>?color=blue">Blue</a>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <input type="text" name="color">
        <input type="submit">
    </form>
  
  
		
</body>
</html>