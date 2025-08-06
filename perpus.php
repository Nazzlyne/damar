<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="perpus.php" method="post">
    <h1>PEMINJAMAN BUKU PERPUSTAKAAN SMKN 1 SUBANG</h1>
    <label>Nama:</label><br>
    <input type="text" name="nama" id=""><br>
    <label>Kelas:</label><br>
    <input type="text" name="kelas" id=""><br>
    <label>NISN:</label><br>
    <input type="text" name="nisn" id=""><br><br><br>
    <label>Judul Buku:</label>
    <input type="text" name="judul" id="">
    <br><br>
    <label>Pengarang</label>
    <input type="text" name="" id="">
    <br><br>
    <label>Kode Buku:</label>
    <input type="text" name="kode" id="">
    <br><br>
    <label>Jenis Buku:</label>
    <input type="text" name="jenis" id="">
    <br><br>
    <label>Jumlah Buku:</label>
    <input type="number" name="jumlah" id="">
    <br><br>
    <label>Tgl Peminjaman</label>
    <input type="date" name="pinjam" id="">
    <br><br>
    <label>Tgl Pengembalian</label>
    <input type="date" name="pengembalian">
    <br><br>
    <input type="submit" value="kirim">
</form>

</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_siswa = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $nsin = $_POST["nisn"];
    $buku = $_POST["judul"];
    $tgl_pinjam = $_POST["pinjam"];
    $tgl_pengembalian = $_POST["pengembalian"];

    echo "terimkasih ".$nama_siswa." telah meminjam ".$buku."<br> jangan lupa dikembalikan pada tanggal ".$tgl_pengembalian."<br>";    
}
?>