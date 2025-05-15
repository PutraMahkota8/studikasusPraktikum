<?php
include 'koneksi.php';

function tambahDrakor($judul, $genre, $tahun) {
    global $koneksi;
    $query = "INSERT INTO drakor (judul, genre, tahun_rilis) VALUES ('$judul', '$genre', '$tahun')";
    return mysqli_query($koneksi, $query);
}

function getDrakor() {
    global $koneksi;
    $query = "SELECT * FROM drakor";
    return mysqli_query($koneksi, $query);
}

function hapusDrakor($id) {
    global $koneksi;
    $query = "DELETE FROM drakor WHERE id = $id";
    return mysqli_query($koneksi, $query);
}
?>
