<?php
include 'drakor.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    hapusDrakor($id);
}

header("Location: index.php");
?>
