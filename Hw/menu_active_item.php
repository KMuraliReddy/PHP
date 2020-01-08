<?php

const HOME = 'Home';
const PRODUCT = 'Products';
const ABOUT = 'About Us';
const IDEA = 'Gift Ideas';

// Menu item that should be active
$active = ABOUT;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Menu active item</title>
    <style>
    #navigation ul {
        width: 150px;
    }

    .menu-item {
        background-color: #e1f4f3;
        color: #0000cc;
    }

    .active {
        background-color: #fea799;
    }
    </style>
</head>
<body>
<header>
    <h1>Menu active item</h1>
    <nav id="navigation">
    <ul>
	<li class=menu-item">Home</li>
	<li class=menu-item">Products</li>
	<li class=menu-item active">About us</li>
	<li class=menu-item">Gift Ideas</li>
    </ul>
</nav>
</header>
</body>
<main></main>
</html>