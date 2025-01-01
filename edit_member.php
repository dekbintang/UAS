<?php
include('koperasi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM member WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        echo "<div class='bg-red-500 text-white p-4 mb-4 rounded'>Anggota tidak ditemukan!</div>";
        exit;
    }
}

if (isset($_POST['update'])) {
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

    $sql = "UPDATE member SET nama = '$nama', email = '$email', tier = '$tier', no_ktp = '$no_ktp', no_telpon = '$no_telpon' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header('Location: daftar_member.php');
        exit;
    } else {
        $error_message = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota</title>
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
                <li><a href="products.php" class="hover:text-hijaumuda">Products</a></li>
                <li><a href="members.php" class="hover:text-hijaumuda">Members</a></li>
            </ul>
        </nav>
    </header>

    <main class="container mx-auto p-6">
        <div class="text-center my-8">
            <h1 class="text-3xl font-semibold text-hijautua">Edit Anggota Koperasi</h1>
            <p class="mt-2 text-gray-600">Mengedit data anggota koperasi.</p>
        </div>

        <?php if (isset($success_message)): ?>
            <div class="bg-green-500 text-white p-4 mb-4 rounded"><?php echo $success_message; ?></div>
        <?php elseif (isset($error_message)): ?>
            <div class="bg-red-500 text-white p-4 mb-4 rounded"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <form action="" method="POST" class="bg-white shadow-lg p-6 rounded-lg mb-6">
            <h2 class="text-xl font-semibold text-hijautua mb-4">Edit Anggota</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-600">Nama</label>
                    <input type="text" name="nama" id="nama" value="<?php echo $row['nama']; ?>" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-hijautua">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-hijautua">
                </div>
                <div>
                    <label for="no_ktp" class="block text-sm font-medium text-gray-600">Nomor KTP</label>
                    <input type="text" name="no_ktp" id="no_ktp" value="<?php echo $row['no_ktp']; ?>" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-hijautua">
                </div>
                <div>
                    <label for="no_telpon" class="block text-sm font-medium text-gray-600">Nomor Telepon</label>
                    <input type="text" name="no_telpon" id="no_telpon" value="<?php echo $row['no_telpon']; ?>" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-hijautua">
                </div>
                <div>
                    <label for="tier" class="block text-sm font-medium text-gray-600">Tier</label>
                    <select name="tier" id="tier" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-hijautua">
                        <option value="Basic" <?php echo ($row['tier'] == 'Basic') ? 'selected' : ''; ?>>Basic</option>
                        <option value="Premium" <?php echo ($row['tier'] == 'Premium') ? 'selected' : ''; ?>>Premium</option>
                        <option value="Elite" <?php echo ($row['tier'] == 'Elite') ? 'selected' : ''; ?>>Elite</option>
                    </select>
                </div>
            </div>
            <button type="submit" name="update" class="mt-4 bg-hijautua text-white px-6 py-2 rounded-lg hover:bg-hijaumuda">Update Anggota</button>
        </form>
    </main>

    <footer class="bg-hijautua text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Koperasi Buana Merta Abadi. Semua hak dilindungi.</p>
        </div>
    </footer>
</body>
</html>
