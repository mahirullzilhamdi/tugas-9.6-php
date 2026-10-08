<?php

$koneksi = mysqli_connect("localhost", "root", "", "faraqu_1");

$nama = $_POST['nama'];

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM mahasiswa WHERE Nama LIKE '%$nama%'"
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Search</title>
</head>
<body>

    <h1>HASIL SEARCH</h1>

    <table border="1" cellpadding="5">
        <tr>
            <th>NRP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>ID Jurusan</th>
        </tr>

        <?php while ($baris = mysqli_fetch_array($data)) { ?>

        <tr>
            <td><?php echo $baris['NRP']; ?></td>
            <td><?php echo $baris['Nama']; ?></td>
            <td><?php echo $baris['Alamat']; ?></td>
            <td><?php echo $baris['ID_Jur']; ?></td>
        </tr>

        <?php } ?>

    </table>

    <br>

    <a href="search.php">Search Lagi</a>
    <br>
    <a href="index.php">Kembali ke Menu</a>

</body>
</html>