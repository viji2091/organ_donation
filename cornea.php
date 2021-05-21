
<!DOCTYPE html>
<html>
<head>
	<title>cornea details	</title>
	<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>

</head>
<body><h3>cornea details</h3>
<table>
<tr>

<th>name</th>
<th>blood_group</th>


</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "organ_donation");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT name,blood_group FROM donor where organ_type='cornea'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {

echo "<tr><td>" .$row["name"]."</td><td>".$row["blood_group"]."</td></tr>";
}
}
else { echo "0 results"; }
$conn->close();

?>
</table>
<a href="dashboard1.php">Back</a>
</body>
</html>


