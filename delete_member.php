<?php
include('koperasi.php'); 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM member WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='bg-green-500 text-white p-4 mb-4 rounded'>Anggota berhasil dihapus!</div>";
        header('Location: daftar_member.php');
    } else {
        echo "<div class='bg-red-500 text-white p-4 mb-4 rounded'>Error: " . $conn->error . "</div>";
    }
}
?>
