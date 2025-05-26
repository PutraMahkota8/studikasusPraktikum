<?php include "koneksi.php"; ?>

<h2>Tambah Data Drakor</h2>
<form method="POST" action="">
    Judul: <input type="text" name="judul"><br><br>
    Genre: <input type="text" name="genre"><br><br>
    Tahun: <input type="number" name="tahun"><br><br>
    <input type="submit" name="submit" value="Simpan">
</form>

<?php
if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $genre = $_POST['genre'];
    $tahun = $_POST['tahun'];

    $query = "INSERT INTO drakor (judul, genre, tahun) VALUES ('$judul', '$genre', '$tahun')";
    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil disimpan. <a href='index.php'>Kembali</a>";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>
