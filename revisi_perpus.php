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
    <input type="text" name="nama" id="" value="<?= isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '' ?>"><br>
    <label>Kelas:</label><br>
    <input type="text" name="kelas" id="" value="<?= isset($_POST['kelas']) ? htmlspecialchars($_POST['kelas']) : '' ?>"><br>
    <label>NISN:</label><br>
    <input type="text" name="nisn" id="" value="<?= isset($_POST['nisn']) ? htmlspecialchars($_POST['nisn']) : '' ?>"><br><br><br>
    <?php
    
     $dataBuku = [
        'buku1' => ['judul' => 'Perahu Kertas', 'pengarang' => 'Dee Lestari', 'kode' => 'K001', 'jenis' => 'Fiksi'],
        'buku2' => ['judul' => 'Filosofi Teras', 'pengarang' => 'Henry', 'kode' => 'K002', 'jenis' => 'Non-Fiksi'],
        'buku3' => ['judul' => 'sibungsu yang kehilangan arah', 'pengarang' => 'salsa adelia', 'kode' => 'K003', 'jenis' => 'Novel'],
        'buku4' => ['judul' => 'Filosofi Teras', 'pengarang' => 'Pengarang 4', 'kode' => 'K004', 'jenis' => 'Komik'],
        'buku5' => ['judul' => 'Buku 5', 'pengarang' => 'Pengarang 5', 'kode' => 'K005', 'jenis' => 'Ensiklopedia'],
    ];
    $judul_terpilih = isset($_POST['judul']) ? $_POST['judul'] : '';
    $pengarang = $kode = $jenis = '';
    if ($judul_terpilih && isset($dataBuku[$judul_terpilih])) {
        $pengarang = $dataBuku[$judul_terpilih]['pengarang'];
        $kode = $dataBuku[$judul_terpilih]['kode'];
        $jenis = $dataBuku[$judul_terpilih]['jenis'];
    }
    ?>
    <label>Judul Buku:</label>
    <select name="judul" id="judul">
        <option value="">-- Pilih Buku --</option>
        <?php foreach ($dataBuku as $key => $buku): ?>
            <option value="<?= $key ?>" <?= $judul_terpilih == $key ? 'selected' : '' ?>><?= $buku['judul'] ?></option>
        <?php endforeach; ?>
    </select>
    <br><br>
    <label>Pengarang</label>
    <input type="text" name="pengarang" id="pengarang" value="<?= htmlspecialchars($pengarang) ?>" readonly>
    <br><br>
    <label>Kode Buku:</label>
    <input type="text" name="kode" id="kode" value="<?= htmlspecialchars($kode) ?>" readonly>
    <br><br>
    <label>Jenis Buku:</label>
    <input type="text" name="jenis" id="jenis" value="<?= htmlspecialchars($jenis) ?>" readonly>

    <br><br>
    <label>Jumlah Buku:</label>
    <input type="number" name="jumlah" id="" value="<?= isset($_POST['jumlah']) ? htmlspecialchars($_POST['jumlah']) : '' ?>">
    <br><br>
    <label>Tgl Peminjaman</label>
    <input type="date" name="pinjam" value="<?= isset($_POST['pinjam']) ? htmlspecialchars($_POST['pinjam']) : '' ?>">
    <br><br>
    <label>Tgl Pengembalian</label>
    <input type="date" name="pengembalian" value="<?= isset($_POST['pengembalian']) ? htmlspecialchars($_POST['pengembalian']) : '' ?>">
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

  $buku = isset($dataBuku[$_POST["judul"]]) ? $dataBuku[$_POST["judul"]] : ['judul'=>'','pengarang'=>'','kode'=>'','jenis'=>''];
    echo "<h2>Data Peminjaman Buku</h2>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>NISN</th>
        <th>Judul Buku</th>
        <th>Pengarang</th>
        <th>Kode Buku</th>
        <th>Jenis Buku</th>
        <th>Jumlah Buku</th>
        <th>Tgl Peminjaman</th>
        <th>Tgl Pengembalian</th>
    </tr>";
 
    echo "<tr>";
    echo "<td>1</td>";
    echo "<td>".htmlspecialchars($_POST['nama'])."</td>";
    echo "<td>".htmlspecialchars($_POST['kelas'])."</td>";
    echo "<td>".htmlspecialchars($_POST['nisn'])."</td>";
    echo "<td>".htmlspecialchars($buku['judul'])."</td>";
    echo "<td>".htmlspecialchars($buku['pengarang'])."</td>";
    echo "<td>".htmlspecialchars($buku['kode'])."</td>";
    echo "<td>".htmlspecialchars($buku['jenis'])."</td>";
    echo "<td>".htmlspecialchars($_POST['jumlah'])."</td>";
    echo "<td>".htmlspecialchars($_POST['pinjam'])."</td>";
    echo "<td>".htmlspecialchars($_POST['pengembalian'])."</td>";
    echo "</tr>";
    echo "</table>";
}

echo "</table>";    
?>