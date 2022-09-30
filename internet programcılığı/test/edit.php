<?php
$DataId = $_GET["id"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "9036first";


//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



// sql to delete a record
$sql = "SELECT * FROM Student WHERE id=$DataId";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  echo $row["ID"]."<br>";
  echo $row["Name"]."<br>";
  echo $row["Surname"]."<br>";
  echo $row["Image"]."<br>";
  echo $row["Gender"]."<br>";
  echo $row["ClassID"]."<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>


<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="">Öğrenci</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Listeleme</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Yeni Kayıt</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div style="background-color: #E9ECEF; padding: 30px;">
  <h3 style="margin-left: 20px;">Öğrenci Düzenleme Ekranı</h3>
  </div>
<div class="container mt-3">



<form action="partial/edit_data.php?Id=36" method="POST" enctype="multipart/form-data"> 
  <div class="container mt-3">
    <h2>Kayıt Formu</h2>
    <div class="mb-3 mt-3">
      <label for="name">  Adı:</label>
      <input name="name" type="text" class="form-control" id="name" placeholder="Adını Giriniz.">
    </div>
    <div class="mb-3">
      <label for="surname">Soyadı:</label>
      <input name="surname" type="text" class="form-control" id="surname" placeholder="Soyadını Giriniz.">
    </div>
    <div class="mb-3">
      <label for="gender">Cinsiyeti:</label>
      <select name="gender" class="form-select">
        <option>Kadın</option>
        <option>Erkek</option>
        <option selected >Seçiniz</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="class">Sınıfı:</label>
      <?php include 'partial/class_list.php';?>
    </div>
    <div class="mb-3">
      <label for="image">Resmi:</label>
      <input name="image" class="form-control" type="file">
    </div> 
        <input type="submit" value="Kaydet">
      <p>&copy; Company 2022-2023</p>
  </div>
</form>
</div>
</body>
</html>
