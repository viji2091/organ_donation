<?php
//include auth.php file on all secure pages
include("auth.php");
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
<p>You are a Life saver......
thank you .....</p>
<a href="logout.php">Logout</a>
</div>
	<style>
body {
  background-image: url('thankImage.png');
  background-repeat: no-repeat;
  background-size: 100%;
}
</body>
</html>