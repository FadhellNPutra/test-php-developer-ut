CREATE DATABASE IF NOT EXISTS db_akademik;

CREATE TABLE mahasiswa(
    id int(5) NOT NULL AUTO_INCREMENT,
    nama varchar(50) NOT NULL,
    alamat varchar(100) NOT NULL,
    umur int(50) NOT NULL,
    PRIMARY KEY(id);
);