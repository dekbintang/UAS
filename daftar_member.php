<?php
include('koperasi.php'); 

if (isset($_POST['create'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tier = $_POST['tier']; 
    $no_ktp = $_POST['no_ktp'];
    $no_telpon = $_POST['no_telpon'];
    
    $nama = $conn->real_escape_string($nama);
    $email = $conn->real_escape_string($email);
    $tier = $conn->real_escape_string($tier);
    $no_ktp = $conn->real_escape_string($no_ktp);
    $no_telpon = $conn->real_escape_string($no_telpon);

    $sql = "INSERT INTO member (nama, email, tier, no_ktp, no_telpon) VALUES ('$nama', '$email', '$tier', '$no_ktp', '$no_telpon')";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='bg-green-500 text-white p-4 mb-4 rounded'>Anggota baru berhasil ditambahkan!</div>";
    } else {
        echo "<div class='bg-red-500 text-white p-4 mb-4 rounded'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}

$sql = "SELECT * FROM member";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Koperasi Anggota</title>
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
        <li><a href="product.php" class="hover:text-hijaumuda">Products</a></li>
        <li><a href="members.php" class="hover:text-hijaumuda">Members</a></li>
      </ul>
    </nav>
  </header>

  <main class="container mx-auto p-6">
    <div class="text-center my-8">
      <h1 class="text-3xl font-semibold text-hijautua">Daftar Anggota Koperasi</h1>
      <p class="mt-2 text-gray-600">Menambah, melihat, mengedit, dan menghapus anggota koperasi.</p>
    </div>

    <form action="" method="POST" class="bg-white shadow-lg p-6 rounded-lg mb-6">
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

    <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
      <table class="w-full table-auto">
        <thead class="bg-hijautua text-white">
          <tr>
            <th class="py-2 px-4 text-left">Nama</th>
            <th class="py-2 px-4 text-left">Email</th>
            <th class="py-2 px-4 text-left">Nomor KTP</th>
            <th class="py-2 px-4 text-left">Nomor Telepon</th>
            <th class="py-2 px-4 text-left">Tier</th>
            <th class="py-2 px-4 text-left">Tanggal Bergabung</th>
            <th class="py-2 px-4">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = $result->fetch_assoc()) { ?>
          <tr class="border-b">
            <td class="py-2 px-4"><?php echo $row['nama']; ?></td>
            <td class="py-2 px-4"><?php echo $row['email']; ?></td>
            <td class="py-2 px-4"><?php echo $row['no_ktp']; ?></td>
            <td class="py-2 px-4"><?php echo $row['no_telpon']; ?></td>
            <td class="py-2 px-4"><?php echo $row['tier']; ?></td>
            <td class="py-2 px-4"><?php echo $row['join_date']; ?></td>
            <td class="py-2 px-4">
              <a href="edit_member.php?id=<?php echo $row['id']; ?>" class="text-yellow-500 hover:text-yellow-700">Edit</a>
              <a href="delete_member.php?id=<?php echo $row['id']; ?>" class="text-red-500 hover:text-red-700 ml-4">Hapus</a>
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
