<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <h3 style="margin-left: 20px;">Öğrenci Listeleme Ekranı</h3>
  </div>
<div class="container mt-3">

  <table class="table table-hover">
    <thead>
      <tr>
        <th>Resmi</th>
        <th>Adı Soyadı</th>
        <th>Cinsiyeti</th>
        <th>Sınıfı</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php include 'partial/data_list.php';?>
    </tbody>
  </table>
  <p>&copy; Company 2022-2023</p>
</div>
</body>
</html>
