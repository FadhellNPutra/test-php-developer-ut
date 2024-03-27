<?php
include "database.php";

$db = new Database();

$id = $_GET['id'];
$db->hapus($id);
header("location: tampil.php");
?>
