<?php
include('koperasi.php'); 

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 

    $sql = "SELECT * FROM pembelian_produk WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak ditemukan.";
    exit;
}

if (isset($_POST['update'])) {
    $nama_produk = $_POST['nama_produk'];
    $jumlah = $_POST['jumlah'];
    $harga_per_unit = $_POST['harga_per_unit'];

    $nama_produk = $conn->real_escape_string($nama_produk);
    $jumlah = (int)$conn->real_escape_string($jumlah);
    $harga_per_unit = (float)$conn->real_escape_string($harga_per_unit);
    $total_harga = $jumlah * $harga_per_unit;

    $sql_update = "UPDATE pembelian_produk 
                   SET nama_produk = '$nama_produk', jumlah = $jumlah, harga_per_unit = $harga_per_unit, total_harga = $total_harga 
                   WHERE id = $id";

    if ($conn->query($sql_update) === TRUE) {
        header("Location: pembelian_products.php?message=update_success");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pembelian Produk</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-poppins bg-gray-100">

<header class="bg-hijautua text-white py-4 sticky top-0">
    <nav class="container mx-auto flex justify-between items-center">
        <a href="#" class="text-3xl font-semibold hover:text-hijaumuda">Koperasi Buana Merta Abadi</a>
    </nav>
</header>

<main class="container mx-auto p-6">
    <div class="text-center my-8">
        <h1 class="text-3xl font-semibold text-hijautua">Edit Pembelian Produk</h1>
    </div>

    <form action="" method="POST" class="bg-white shadow-lg p-6 rounded-lg mb-6">
        <h2 class="text-xl font-semibold text-hijautua mb-4">Edit Pembelian Produk</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <label for="nama_produk" class="block text-sm font-medium text-gray-600">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" value="<?php echo $row['nama_produk']; ?>" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-hijautua">
            </div>
            <div>
                <label for="jumlah" class="block text-sm font-medium text-gray-600">Jumlah</label>
                <input type="number" name="jumlah" id="jumlah" value="<?php echo $row['jumlah']; ?>" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-hijautua">
            </div>
            <div>
                <label for="harga_per_unit" class="block text-sm font-medium text-gray-600">Harga Per Unit</label>
                <input type="number" name="harga_per_unit" id="harga_per_unit" step="0.01" value="<?php echo $row['harga_per_unit']; ?>" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-hijautua">
            </div>
        </div>
        <button type="submit" name="update" class="mt-4 bg-hijautua text-white px-6 py-2 rounded-lg hover:bg-hijaumuda">Update Pembelian</button>
    </form>
</main>

<footer class="bg-hijautua text-white py-6">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 Koperasi Buana Merta Abadi. Semua hak dilindungi.</p>
    </div>
</footer>

</body>
</html>
