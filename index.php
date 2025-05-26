
<?php
include 'drakor.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $genre = $_POST['genre'];
    $tahun = $_POST['tahun'];
    tambahDrakor($judul, $genre, $tahun);
}

$dataDrakor = getDrakor();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Drakor</title>
</head>
<body>
    <h1 align="center">Daftar Drama Korea</h1>

    <fieldset style="width: 300px; margin: auto;">
        <legend><strong>Tambah Data</strong></legend>
        <form method="POST">
            <p>
                Judul:<br>
                <input type="text" name="judul" required>
            </p>
            <p>
                Genre:<br>
                <input type="text" name="genre" required>
            </p>
            <p>
                Tahun Rilis:<br>
                <input type="number" name="tahun" required>
            </p>
            <p>
                <input type="submit" value="Tambah Drakor">
            </p>
        </form>
    </fieldset>

    <h2 align="center">List Drakor</h2>
    <table border="1" cellspacing="0" cellpadding="8" align="center">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Tahun Rilis</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($dataDrakor)) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['judul']) ?></td>
            <td><?= htmlspecialchars($row['genre']) ?></td>
            <td><?= $row['tahun_rilis'] ?></td>
        </tr>
        <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
        </td>

        <?php } ?>
    </table>
</body>
</html>