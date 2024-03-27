<?php
class Database {

    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "db_akademik";
    var $koneksi;

    function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }

    function tampil() {
        $query = "SELECT * FROM mahasiswa";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    function simpan($nama, $alamat, $umur) {
        $query = "INSERT INTO mahasiswa (nama, alamat, umur) VALUES ('$nama', '$alamat', '$umur')";
        mysqli_query($this->koneksi, $query);
    }

    function hapus($id) {
        $query = "DELETE FROM mahasiswa WHERE id = '$id'";
        mysqli_query($this->koneksi, $query);
    }

}
?>
