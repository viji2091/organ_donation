<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
        <style>
body {
  background-image: url('regImage.png');
  background-repeat: no-repeat;
  background-size: 100%;
}
</style>
<?php
//require('db.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organ_donation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// If form submitted, insert values into the database.
if (isset($_REQUEST['name'])){
 $name = stripslashes($_REQUEST['name']);
 //$name = mysqli_real_escape_string($con,$name);

  $email = stripslashes($_REQUEST['email']);
 //$email = mysqli_real_escape_string($con,$email);
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 //$username = mysqli_real_escape_string($con,$username); 
 
$password = stripslashes($_REQUEST['password']);
 //$password = mysqli_real_escape_string($con,$password);

$blood_group = stripslashes($_REQUEST['blood_group']);
        //escapes special characters in a string
 //$blood_group = mysqli_real_escape_string($con,$blood_group); 
 $organ_type = stripslashes($_REQUEST['organ_type']);
 //$organ_type = mysqli_real_escape_string($con,$organ_type);
 $address = stripslashes($_REQUEST['address']);
 //$address = mysqli_real_escape_string($con,$address);
 $phone_no = stripslashes($_REQUEST['phone_no']); 
 //$phone_no = mysqli_real_escape_string($con,$phone_no);
  $trn_date = date("Y-m-d H:i:s");


      $query = "INSERT into `patient` (name,email,username, password,blood_group, organ_type, address, phone_no,trn_date)
VALUES ('$name', '$email','$username', '$password','$blood_group', '$organ_type', '$address', '$phone_no','$trn_date')";

if ($conn->query($query) === TRUE) {
  //echo "New record created successfully". $conn -> insert_id;
$patient_id = $conn -> insert_id;
$query1="INSERT into `organ_patient` (patient_id, blood_group,organ_type) VALUES ('$patient_id','$blood_group','$organ_type')";
$conn->query($query1);
echo "<div class='form'>
<h3>You are registered successfully.</h3>

<br/>Click here to <a href='login1.php'>Login</a></div>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
        //$result = mysqli_query($con,$query);

//
   //$result1 = mysqli_query($con,$query1);    
        //if($result || $result1){
          // echo "<div class='form'>
//<h3>You are registered successfully.</h3>

//<br/>Click here to <a href='login.php'>Login</a></div>";
  //}
    }else
{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
  <input type="name" name="name" placeholder="Name" required />
<input type="email" name="email" placeholder="Email" required />
<input type="text" name="username" placeholder="Username" required />

<input type="password" name="password" placeholder="Password" required /><br><br>
<label>Blood group</label><br><br>
<select name="blood_group">
<option>--bloodtype---</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
</select><br><br>
<label>Organ type</label><br><br>
<select name="organ_type">
<option>--organ type---</option>
<option value="kidney">kidney</option>
<option value="heart">heart</option>
<option value="cornea">cornea</option>
</select><br><br>
<label>Address:</label><br>
<input type="text" name="address" placeholder="Address" required /><br><br>
<label>Phone number</label><br><br>
<input type="int" name="phone_no" placeholder="Phone number" required /><br>


<input type="submit" name="submit" value="Register" />
</form>
<p>Already have account? <a href='login1.php'>Login Here</a></p>
<a href="first.php">Home</a>

</div>
<?php } ?>
</body>
</html>
