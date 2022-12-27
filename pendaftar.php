<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    
  <main> 
  <div class="container">
      <h1>Data Pendaftar</h1> 

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Asal</th>
      <th scope="col">Usia</th>
      <th scope="col">Alamat</th>
      <th scope="col">Nama Orang Tua</th>        
    </tr>
  </thead>
  </div>

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pendaftaran";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM `data`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
      echo "
  
      
      <tr>
      <th scope=\"row\">" . $row["id"]. "</th>
        <td>" . $row["Nama"]. "</td>
        <td>" . $row["Asal"]. "</td>
        <td>" . $row["Usia"]. "</td>
        <td>" . $row["Alamat"]. "</td>
        <td>" . $row["Ortu"]. "</td>
      </tr>";
  
  
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  



