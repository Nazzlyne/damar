<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIMAKE FORM</title>
</head>
<body>
    <h2 style="text-align: center;">SELAMAT DATANG DI MIMAKE MART</h2>
    <form action="mimake.php" method="post">
        <label>NAMA PEMBELI :</label><br>
        <input type="text" name="nama_pembeli" required><br><br>
        <label>KELAS :</label><br>
        <input type="text" name="kelas" required><br><br>
        <label>NAMA BARANG :</label><br>
        <input type="text" name="nama_barang" required><br><br>
        <label>JUMLAH BARANG: </label><br>
        <input type="number" name="jumlah_barang" required><br><br>
        <label>KODE BARANG :</label><br>
        <input type="number" name="kode_barang" required><br><br>
        <label>METODE PEMBAYARAN</label><br>
        <select type="option" name="metode_pembayaran" required><br><br>
        <option value="cash">CASH</option>
        <option value="transfer">TRANSFER</option>
        <option value=" QRIS">QRIS</option>
        </select><br><br>
        <input type="submit" value="kirim"><br><br>
    </form>
</body>
</html>


    <?php
        if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        $nama_pembeli = $_POST["nama_pembeli"];
        $kelas = $_POST["kelas"];
        $nama_barang = $_POST["nama_barang"];
        $jumlah_barang = $_POST["jumlah_barang"];
        $kode_barang = $_POST["kode_barang"];
        $metode_pembayaran = $_POST["metode_pembayaran"];
      

        echo "TERIMAKASIH ".$nama_pembeli.  " TELAH MELAKUKAN PEMBELIAN DI MIMAKE MART 
        <br> MOHON MEMINTA STRUK PEMBAYARAN KE KASIR";


    }
    ?>
    


