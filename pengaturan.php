<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan - Aplikasi Pemantauan Sampah</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .content {
            padding: 20px;
            line-height: 1.6;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .box {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .box h2 {
            color: #27ae60;
            font-size: 1.5em;
        }
        .back-btn {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #27ae60;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .back-btn:hover {
            background-color: #2ecc71;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group button {
            background-color: #27ae60;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #2ecc71;
        }
    </style>
</head>
<body>

    <div class="content">
        <!-- Pengaturan Pengguna -->
        <div class="box">
            <h2>Pengaturan Pengguna</h2>
            <form action="save_settings.php" method="POST">
                <div class="form-group">
                    <label for="userRole">Peran Pengguna:</label>
                    <select id="userRole" name="userRole">
                        <option value="admin">Admin</option>
                        <option value="operator">Operator</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="userEmail">Email Pengguna:</label>
                    <input type="email" id="userEmail" name="userEmail" placeholder="Masukkan email pengguna" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="saveUserSettings">Simpan Pengaturan</button>
                </div>
            </form>
        </div>

        <!-- Pengaturan Jadwal Monitoring -->
        <div class="box">
            <h2>Pengaturan Jadwal Monitoring</h2>
            <form action="save_settings.php" method="POST">
                <div class="form-group">
                    <label for="scheduleFrequency">Frekuensi Monitoring:</label>
                    <select id="scheduleFrequency" name="scheduleFrequency">
                        <option value="harian">Harian</option>
                        <option value="mingguan">Mingguan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="reminderTime">Waktu Pengingat:</label>
                    <input type="time" id="reminderTime" name="reminderTime" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="saveScheduleSettings">Simpan Pengaturan Jadwal</button>
                </div>
            </form>
        </div>

        <!-- Pengaturan Laporan -->
        <div class="box">
            <h2>Pengaturan Laporan</h2>
            <form action="save_settings.php" method="POST">
                <div class="form-group">
                    <label for="reportFormat">Format Laporan:</label>
                    <select id="reportFormat" name="reportFormat">
                        <option value="pdf">PDF</option>
                        <option value="excel">Excel</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="reportFrequency">Frekuensi Laporan:</label>
                    <select id="reportFrequency" name="reportFrequency">
                        <option value="harian">Harian</option>
                        <option value="mingguan">Mingguan</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" name="saveReportSettings">Simpan Pengaturan Laporan</button>
                </div>
            </form>
        </div>

    </div>

    <a href="dashboard admin.html"><button class="back-btn">Kembali ke Dashboard</button></a>

</body>
</html>
