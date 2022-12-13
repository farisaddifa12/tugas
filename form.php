<!doctype html>
<header>
    <h1>Formulir Pendaftaran
</header>

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


if ($conn->query($sql) === TRUE) {
  
} else {
  
}
$conn->close();
?>


<?php
echo "<form action=\"http://localhost/tugas/update.php\" method=\"POST\">";
$row = $result->fetch_assoc();
?>



    <label>Masukkan data id</label><br>
    <input type="text" name="id"  value="<?php echo $row ["id"] ?>"><br>

    <label>Masukkan Nama</label><br>
    <input type="text" name="Nama" value="<?php echo $row ["Nama"] ?>"><br> 

    <label>Masukkan Asal</label><br>
    <input type="text" name="Asal" value="<?php echo $row ["Asal"] ?>"><br>  

    <label>Masukkan Usia</label><br>
    <input type="text" name="Usia" value="<?php echo $row ["Usia"] ?>"><br> 

    <label>Masukkan Alamat</label><br>
    <input type="text" name="Alamat" value="<?php echo $row ["Alamat"] ?>"><br>

    <label>Masukkan Nama Orang Tua</label><br>
    <input type="text" name="Ortu" value="<?php echo $row ["Ortu"] ?>"><br>

    <input type="submit" value="kirim">
</form>

  