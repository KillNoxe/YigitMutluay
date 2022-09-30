<?php
	
	if($_POST['name']){
		$name = $_POST["name"];
		echo "İsim : ".$name."<br>";
    }
    if($_POST['surname']){
		$surname = $_POST["surname"];
		echo "soyad : ".$surname."<br>";
    }
    if($_POST['gender']){
        $gender = $_POST["gender"];
        if($gender == "Erkek"){
            $gender = 1;
        }
        else{
            $gender = 0;
        }
		echo "Cinsiyet : ".$gender."<br>";
    }
    if($_POST['class']){
        $class = $_POST["class"];
		echo "Sınıf : ".$class."<br>";
    }
    if($_FILES['image']){
        $image = $_FILES['image']['name'];
		echo "image : ".$image."<br><br>";
	}
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


$sql = "INSERT INTO Student (Name,Surname,Gender,ClassId,Image) 
VALUES ('$name', '$surname', '$gender','$class','$image')";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
header('Location: ../index.php');
?>