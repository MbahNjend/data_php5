<?php
// Mendapatkan ID anggota yang ingin dihapus
$id = $_GET["id"];

// Query untuk menghapus data anggota
$sql = "DELETE FROM data_casis WHERE id = $id";


// Redirect ke halaman daftar anggota
header("Location: data-casis.php");
?>
