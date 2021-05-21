
<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
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
<body>
<table>
<tr>
<th>name</th>
<th>email</th>
<th>blood_group</th>
<th>Organ_Type</th>
<th>address</th>
<th>phoneno</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "organ_donation");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT *  FROM patient";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" .$row["name"]."</td><td>".$row["email"]."</td><td>".$row["blood_group"]."</td><td>".$row["organ_type"]."</td><td>".$row["address"]."</td><td>"
.$row["phone_no"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table><br><br>
<a href="adminpage.php">Back</a>
</body>
</html>