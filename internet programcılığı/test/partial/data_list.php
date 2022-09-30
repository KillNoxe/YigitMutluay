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


$sql = "SELECT student.ID AS StuID,student.Name,student.Surname,student.Image,student.Gender,student.ClassID,classroom.ClassName, classroom.ID FROM student INNER JOIN classroom on student.ClassID=classroom.ID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo 
    // "ID : " . $row["ID"]. 
    // "<br>Name : " . $row["Name"]. " " . $row["Surname"]. 
    // "<br> Resim : ".$row["Image"]. 
    // "<br> Cinsiyet : ".$row["Gender"]. 
    // "<br> Sınıfı : ".$row["ClassID"]
    // ."<br><br>"
    // ;
    if($row["Gender"] == 1){
        $cinsiyet = "Erkek";
        $resim = "male.png";
    }
    else{
        $cinsiyet = "Kız";
        $resim = "female.png";
    }
    if($row["Image"] != Null){
    }
    else{
        $row["Image"] = $resim;
    }
    echo "
    <tr>
        <td><img class='img' src='img/".$row["Image"]."'></td>
        <td>".$row["Name"]." ".$row["Surname"]."</td>
        <td>".$cinsiyet."</td>
        <td>".$row["ClassName"]."</td>
        <td></td>
        <td></td>
        <td><a class = 'kirmizibuton' href='edit.php?id=".$row["StuID"]."'>Düzenle</a>
        <a type='submit' class = 'mavibuton' href='delete.php?id=".$row["StuID"]."'>Sil</a></td>
        <td>
    </tr>
    ";
  }
} else {
  echo "0 results";
}
$conn->close();
?>