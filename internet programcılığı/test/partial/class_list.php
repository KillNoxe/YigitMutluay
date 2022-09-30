<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "9036first";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM classroom";
$result = $conn->query($sql);
echo "<select name='class' class='form-select'>";
while($row = $result->fetch_assoc()) {
  echo "<option value=".$row["ID"].">".$row["ClassName"]."</option>";
}
echo "<option selected>Seçiniz</option>";
echo "</select>";
?>