<?php
include('koperasi.php'); 

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 

    $sql = "DELETE FROM pembelian_produk WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: pembelian_products.php?message=delete_success");
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "ID tidak ditemukan.";
}
?>
