<?php
include "database.php";

$db = new Database();
$data = $db->tampil();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

<h1>Data Mahasiswa</h1>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Usia</th>
        <th>Opsi</th>
    </tr>
    <?php
    $no = 1;
    while ($row = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td><?php echo $row['umur']; ?></td>
            <td>
                <a href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>

<a href="input.php">Input Data</a>

</body>
</html>
