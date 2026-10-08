<?php

$koneksi = mysqli_connect("localhost", "root", "", "faraqu_1");

$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$id_jur = $_POST['id_jur'];

$sql = "INSERT INTO mahasiswa (NRP, Nama, Alamat, ID_Jur)
        VALUES ('$nrp', '$nama', '$alamat', '$id_jur')";

mysqli_query($koneksi, $sql);

echo "Data berhasil ditambahkan";
echo "<br>";
echo "<a href='bukuTamu.php'>Kembali</a>";
echo "<br>";
echo "<a href='index.php'>Menu Utama</a>";

?>