<?php
//include auth.php file on all secure pages
include("auth1.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>
<p><a href="dashboard1.php">Dashboard</a></p>
<a href="logout1.php">Logout</a>
</div>
        <style>
body {
  background-image: url('index2Image.png');
  background-repeat: no-repeat;
  background-size: 100%;
}
</style>
</body>
</html>