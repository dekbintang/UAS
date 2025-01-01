<?php
include('koperasi.php'); // Pastikan koneksi ke database sudah benar

// Menambahkan anggota baru
if (isset($_POST['create'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tier = $_POST['tier']; // Menambahkan 'tier'
    $no_ktp = $_POST['no_ktp']; // Menambahkan 'no_ktp'
    $no_telpon = $_POST['no_telpon']; // Menambahkan 'no_telpon'
    
    // Pastikan tidak ada karakter yang membahayakan di input
    $nama = $conn->real_escape_string($nama);
    $email = $conn->real_escape_string($email);
    $tier = $conn->real_escape_string($tier);
    $no_ktp = $conn->real_escape_string($no_ktp);
    $no_telpon = $conn->real_escape_string($no_telpon);

    // Query untuk memasukkan data anggota baru
    $sql = "INSERT INTO member (nama, email, tier, no_ktp, no_telpon) VALUES ('$nama', '$email', '$tier', '$no_ktp', '$no_telpon')";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='bg-green-500 text-white p-4 mb-4 rounded'>Anggota baru berhasil ditambahkan!</div>";
    } else {
        echo "<div class='bg-red-500 text-white p-4 mb-4 rounded'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Anggota Koperasi</title>
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
      </ul>
    </nav>
  </header>

  <main class="container mx-auto p-6">
    <div class="text-center my-8">
      <h1 class="text-3xl font-semibold text-hijautua">Daftar Anggota Koperasi</h1>
      <p class="mt-2 text-gray-600">Lengkapi informasi Anda untuk menjadi anggota koperasi kami.</p>
    </div>

    <form action="register.php" method="POST" class="bg-white shadow-lg p-6 rounded-lg mb-6">
      <h2 class="text-xl font-semibold text-hijautua mb-4">Tambah Anggota Baru</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label for="nama" class="block text-sm font-medium text-gray-600">Nama</label>
          <input type="text" name="nama" id="nama" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-hijautua">
        </div>
        <div>
          <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
          <input type="email" name="email" id="email" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-hijautua">
        </div>
        <div>
          <label for="no_ktp" class="block text-sm font-medium text-gray-600">Nomor KTP</label>
          <input type="text" name="no_ktp" id="no_ktp" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-hijautua">
        </div>
        <div>
          <label for="no_telpon" class="block text-sm font-medium text-gray-600">Nomor Telepon</label>
          <input type="text" name="no_telpon" id="no_telpon" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-hijautua">
        </div>
        <div>
          <label for="tier" class="block text-sm font-medium text-gray-600">Tier</label>
          <select name="tier" id="tier" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-hijautua">
            <option value="Basic">Basic</option>
            <option value="Premium">Premium</option>
            <option value="Elite">Elite</option>
          </select>
        </div>
      </div>
      <button type="submit" name="create" class="mt-4 bg-hijautua text-white px-6 py-2 rounded-lg hover:bg-hijaumuda">Tambah Anggota</button>
    </form>
  </main>

  <footer class="bg-hijautua text-white py-6">
    <div class="container mx-auto text-center">
      <p>&copy; 2024 Koperasi Buana Merta Abadi. Semua hak dilindungi.</p>
    </div>
  </footer>

</body>
</html>
