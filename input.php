<?php
include "database.php";

$db = new Database();

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];

    $db->simpan($nama, $alamat, $umur);
    header("location: tampil.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Data Mahasiswa</title>
</head>
<body>

<h1>Input Data Mahasiswa</h1>

<form method="post" action="">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama">

    <label for="alamat">Alamat:</label>
    <textarea name="alamat" id="alamat"></textarea>

    <label for="umur">Usia:</label>
    <input type="number" name="umur" id="umur">

    <input type="submit" name="simpan" value="Simpan">
</form>

</body>
</html>
