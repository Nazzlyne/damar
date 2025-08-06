<html>
<body>
    <form action="bank.php" method="post">
    <h1>BANK MINI SMKN 1 SUBANG</h1>
    <label>tanggal:</label><br>
    <input type ="date" name="tanggal" id =""><br>
    <label>nama lengkap:</label><br>
    <input type ="text" name="nama_lengkap" id =""><br>
    <label>kelas:</label><br>
    <input type ="text" name="kelas" id =""><br>
    <label>nomor rekenig:</label><br>
    <input type ="text" name="nomor_rekening" id =""><br>
    <label>no identitas:</label><br>
    <input type ="text" name="no_identitas" id =""><br>
    <label>jenis transaksi:</label><br>
    <select name="jenis_transaksi" id="">
        <option value="setoran">setoran</option>
        <option value="penarikan">penarikan</option>
    </select><br>
    <label>jumlah uang:</label><br>
    <input type ="number" name="jumlah_uang" id=""><br>
    <input type="submit" value="kirim">
</form>
</body>
</html>
<?php
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    $tanggal = $_POST ["tanggal"];
    $nama_lengkap = $_POST ["nama_lengkap"];
    $kelas = $_POST ["kelas"];
    $nomor_rekening = $_POST ["nomor_rekening"];
    $no_identitas = $_POST ["no_identitas"];
    $jenis_transaksi = $_POST ["jenis_transaksi"];
    $jumlah_uang = $_POST ["jumlah_uang"];

    echo " terimakasih ".$nama_lengkap." telah melakukan ".$jenis_transaksi." sebesar ".$jumlah_uang." pada tanggal ".$tanggal."<br>";
}
?>