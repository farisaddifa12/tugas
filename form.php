<!doctype html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <meta charset="utf-8">
  <title>Formulir Pendaftaran</title>
</head>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <h1 class="fs-4">Formulir Pendaftaran</h1>
      </a>
    </header>
</div>

<?php

// $servername = "sql107.epizy.com";
// $username = "epiz_32958231";
// $password = "RMEb9Ncjmv0";
// $dbname = "epiz_32958231_pendaftaran";

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "pendaftaran";


/// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `data`"; 
$result = $conn->query($sql);



?>


<?php
echo "<form action=\"http://localhost/tugas/update.php\" method=\"POST\">";
$row = $result->fetch_assoc();
?>

<div class="container mt-5">
  <div class="mb-3">
    <input type="hidden" class="form-control" name="id"  value=""><br>
  </div>
  <div class="mb-3">
    <label>Masukkan Nama</label><br>
    <input type="text" class="form-control" name="Nama" value=""><br> 
  </div>
  <div class="mb-3">
    <label>Masukkan Asal</label><br>
    <input type="text" class="form-control" name="Asal" value=""><br>  
  </div>
  <div class="mb-3">
    <label>Masukkan Usia</label><br>
    <input type="text" class="form-control" name="Usia" value=""><br> 
  </div>
  <div class="mb-3">
    <label>Masukkan Alamat</label><br>
    <input type="text" class="form-control" name="Alamat" value=""><br>
  </div>
  <div class="mb-3">
    <label>Masukkan Nama Orang Tua</label><br>
    <input type="text" class="form-control" name="Ortu" value=""><br>
  </div>
    <input type="submit" class="btn btn-primary mb-3" value="kirim">
</div>
</form>

  