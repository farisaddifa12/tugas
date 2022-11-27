<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nyoba Cok</title>

</head>
<body>
<main>
    <div class="conatiner">
        <h1 class="display-5 fw-bold" style="color: black">Data Berhasil Diupdate</h1>
    </div>
    <div class="d-grid gap-2 d-sm-flex">
    <a href="nyoba.php">
<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pendaftaran";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$Nama= $_POST['Nama'];
$Asal= $_POST['Asal'];
$Usia= $_POST['Usia'];
$Alamat= $_POST['Alamat'];
$Ortu= $_POST['Ortu'];

$sql = "INSERT INTO `data` (`id`, `Nama`, `Asal`, `Usia`, `Alamat`, `Ortu`) VALUES (NULL, '$id', '$Nama', '$Usia', '$Asal', '$Ortu');"; 
$result = $conn->query($sql);

  $conn->close();
?>

</body>
</main>
