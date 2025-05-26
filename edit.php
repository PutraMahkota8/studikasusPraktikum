<?php
include "koneksi.php";

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan.");
}

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM drakor WHERE id=$id");

if (!$data || mysqli_num_rows($data) == 0) {
    die("Data tidak ditemukan.");
}

$row = mysqli_fetch_assoc($data);
?>

<h2>Edit Data Drakor</h2>
<form method="POST">
    Judul:<br>
    <input type="text" name="judul" value="<?= htmlspecialchars($row['judul']) ?>"><br><br>
    Genre:<br>
    <input type="text" name="genre" value="<?= htmlspecialchars($row['genre']) ?>"><br><br>
    Tahun Rilis:<br>
    <input type="number" name="tahun" value="<?= htmlspecialchars($row['tahun']) ?>"><br><br>
    <input type="submit" name="submit" value="Update">
</form>

<?php
if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $genre = $_POST['genre'];
    $tahun = $_POST['tahun'];

    $query = "UPDATE drakor SET judul='$judul', genre='$genre', tahun='$tahun' WHERE id=$id";
    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil diperbarui. <a href='index.php'>Kembali</a>";
    } else {
        echo "Gagal update data: " . mysqli_error($koneksi);
    }
}
?>
