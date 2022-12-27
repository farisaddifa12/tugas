<!doctype html>
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Sukses</title>

</head>
<body>
<main>

    <div class="container">
        <h1 class="display-5 fw-bold" style="color: black">Data Berhasil Diupdate</h1>
    </div>
    <div class="d-grid gap-2 d-sm-flex">
    <a href="form.php" type="button" class="btn btn-primary mb-3">Kembali</a>
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
