<?php
include('koperasi.php');

if (isset($_POST['create'])) {
    $nama_produk = $_POST['nama_produk'];
    $jumlah = $_POST['jumlah'];
    $harga_per_unit = $_POST['harga_per_unit'];

    $nama_produk = $conn->real_escape_string($nama_produk);
    $jumlah = (int)$conn->real_escape_string($jumlah);
    $harga_per_unit = (float)$conn->real_escape_string($harga_per_unit);

    $sql = "INSERT INTO pembelian_produk (nama_produk, jumlah, harga_per_unit) 
            VALUES ('$nama_produk', $jumlah, $harga_per_unit)";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='bg-green-500 text-white p-4 mb-4 rounded'>Pembelian baru berhasil ditambahkan!</div>";
    } else {
        echo "<div class='bg-red-500 text-white p-4 mb-4 rounded'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}

$sql = "SELECT * FROM pembelian_produk";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Pembelian Produk</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            yellow: '#ffe75e',
            orange: '#feb72b',
            hijautua: '#527318',
            hijaumuda: '#899857',
          },
          fontFamily: {
            poppins: 'Poppins',
          },
        }
      }
    }
  </script>
</head>
<body class="font-poppins bg-gray-100">

  <header class="bg-hijautua text-white py-4 sticky top-0">
    <nav class="container mx-auto flex justify-between items-center">
      <a href="#" class="text-3xl font-semibold hover:text-hijaumuda">Koperasi Buana Merta Abadi</a>
      <ul class="flex space-x-6">
        <li><a href="home.php" class="hover:text-hijaumuda">Home</a></li>
        <li><a href="about.php" class="hover:text-hijaumuda">About</a></li>
        <li><a href="pembelian.php" class="hover:text-hijaumuda">Pembelian</a></li>
      </ul>
    </nav>
  </header>

  <main class="container mx-auto p-6">
    <div class="text-center my-8">
      <h1 class="text-3xl font-semibold text-hijautua">Daftar Pembelian Produk</h1>
      <p class="mt-2 text-gray-600">Kelola data pembelian produk.</p>
    </div>

    <form action="" method="POST" class="bg-white shadow-lg p-6 rounded-lg mb-6">
      <h2 class="text-xl font-semibold text-hijautua mb-4">Tambah Pembelian Baru</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div>
          <label for="nama_produk" class="block text-sm font-medium text-gray-600">Nama Produk</label>
          <input type="text" name="nama_produk" id="nama_produk" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-hijautua">
        </div>
        <div>
          <label for="jumlah" class="block text-sm font-medium text-gray-600">Jumlah</label>
          <input type="number" name="jumlah" id="jumlah" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-hijautua">
        </div>
        <div>
          <label for="harga_per_unit" class="block text-sm font-medium text-gray-600">Harga Per Unit</label>
          <input type="number" name="harga_per_unit" id="harga_per_unit" step="0.01" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-hijautua">
        </div>
      </div>
      <button type="submit" name="create" class="mt-4 bg-hijautua text-white px-6 py-2 rounded-lg hover:bg-hijaumuda">Tambah Pembelian</button>
    </form>

    <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
      <table class="w-full table-auto">
        <thead class="bg-hijautua text-white">
          <tr>
            <th class="py-2 px-4 text-left">Nama Produk</th>
            <th class="py-2 px-4 text-left">Jumlah</th>
            <th class="py-2 px-4 text-left">Harga Per Unit</th>
            <th class="py-2 px-4 text-left">Total Harga</th>
            <th class="py-2 px-4 text-left">Tanggal Pembelian</th>
            <th class="py-2 px-4">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = $result->fetch_assoc()) { ?>
          <tr class="border-b">
            <td class="py-2 px-4"><?php echo $row['nama_produk']; ?></td>
            <td class="py-2 px-4"><?php echo $row['jumlah']; ?></td>
            <td class="py-2 px-4"><?php echo $row['harga_per_unit']; ?></td>
            <td class="py-2 px-4"><?php echo $row['total_harga']; ?></td>
            <td class="py-2 px-4"><?php echo $row['tanggal_pembelian']; ?></td>
            <td class="py-2 px-4">
              <a href="editPembelian.php?id=<?php echo $row['id']; ?>" class="text-yellow-500 hover:text-yellow-700">Edit</a>
              <a href="deletePembelian.php?id=<?php echo $row['id']; ?>" class="text-red-500 hover:text-red-700 ml-4">Hapus</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </main>

  <footer class="bg-hijautua text-white py-6">
    <div class="container mx-auto text-center">
      <p>&copy; 2024 Koperasi Buana Merta Abadi. Semua hak dilindungi.</p>
    </div>
  </footer>
</body>
</html>
