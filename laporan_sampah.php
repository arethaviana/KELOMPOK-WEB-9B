<?php
// koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pengelolaan sampah";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Untuk menyimpan data laporan baru (Create)
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['jenis_sampah'])) {
    $jenis_sampah = $_POST['jenis_sampah'];
    $volume = $_POST['volume'];
    $periode = $_POST['periode'];
    $lokasi = $_POST['lokasi'];
    $tanggal = date('Y-m-d');

    $sql = "INSERT INTO laporan_sampah (jenis_sampah, volume, periode, lokasi, tanggal) 
            VALUES ('$jenis_sampah', '$volume', '$periode', '$lokasi', '$tanggal')";

    if ($conn->query($sql) === TRUE) {
        echo "Laporan berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Untuk menghapus data laporan (Delete)
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $sql = "DELETE FROM laporan_sampah WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Laporan berhasil dihapus.";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Ambil data laporan untuk ditampilkan (Read)
$sql = "SELECT * FROM laporan_sampah";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pemantauan Sampah - Laporan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .content {
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #27ae60;
            color: white;
        }
        button {
            padding: 10px 15px;
            background-color: #27ae60;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #2ecc71;
        }
    </style>
</head>
<body>

    <div class="content">
        <h1>Input Laporan Pemantauan Sampah Di Desa Dukuh</h1>
        <!-- Form untuk input laporan -->
        <form action="" method="POST">
            <label for="jenis_sampah">Jenis Sampah:</label>
            <select id="jenis_sampah" name="jenis_sampah" required>
                <option value="organik">Sampah Organik</option>
                <option value="anorganik">Sampah Anorganik</option>
                <option value="b3">Sampah B3</option>
            </select><br>

            <label for="volume">Volume Sampah (kg):</label>
            <input type="number" id="volume" name="volume" required><br>

            <label for="periode">Periode:</label>
            <select id="periode" name="periode" required>
                <option value="harian">Harian</option>
                <option value="mingguan">Mingguan</option>
                <option value="bulanan">Bulanan</option>
            </select><br>

            <label for="lokasi">Lokasi:</label>
            <select id="lokasi" name="lokasi" required>
                <option value="TPS_Dukuh">TPS Dukuh</option>
                <option value="TPS_Mantrijeron">TPS Mantrijeron</option>
                <option value="TPS_Tamansari">TPSTamansari</option>
            </select><br>

            <button type="submit">Simpan Laporan</button>
        </form>

        <h1>Laporan Pemantauan Sampah Di Desa Dukuh</h1>
        <!-- Tabel untuk menampilkan laporan -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Jenis Sampah</th>
                    <th>Volume Sampah (kg)</th>
                    <th>Periode</th>
                    <th>Lokasi</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>".$row["id"]."</td>
                            <td>".$row["jenis_sampah"]."</td>
                            <td>".$row["volume"]."</td>
                            <td>".$row["periode"]."</td>
                            <td>".$row["lokasi"]."</td>
                            <td>".$row["tanggal"]."</td>
                            <td>
                                <a href='?delete_id=".$row["id"]."'><button>Hapus</button></a>
                            </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>

<?php
$conn->close();
?>

<!-- Back Button -->
<a href="dashboard admin.html"><button class="back-btn">Kembali ke Dashboard</button></a>
    </div>

</body>
</html>
