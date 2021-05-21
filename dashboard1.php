<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Dashboard</p>
<p>Details of organ -donor</p>

<h3><a href="kidney.php">kidney</a>
<a href="heart.php">heart</a>
<a href="cornea.php">cornea</a><br><br><br>
<a href="logout.php">Logout</a>

        <style>
body {
  background-image: url('dashboard1Image.png');
  background-repeat: no-repeat;
  background-size: 100%;
}
</style>
</div>
</body>
</html>