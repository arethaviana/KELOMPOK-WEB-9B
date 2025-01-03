<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Monitoring - Aplikasi Pemantauan Sampah</title>
    <style>
        /* Styling Code */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .content {
            padding: 20px;
        }
        .box {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        .back-btn {
            padding: 10px 15px;
            background-color: #27ae60;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .back-btn:hover {
            background-color: #2ecc71;
        }
    </style>
</head>
<body>

    <div class="content">
        <div class="box">
            <h2>Jadwal Monitoring Sampah</h2>
            <!-- Hardcoded Data for the Schedules -->
            <table>
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Lokasi</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example of Hardcoded Data -->
                    <tr>
                        <td>Senin</td>
                        <td>Desa A</td>
                        <td>08:00</td>
                    </tr>
                    <tr>
                        <td>Selasa</td>
                        <td>Desa B</td>
                        <td>09:00</td>
                    </tr>
                    <tr>
                        <td>Rabu</td>
                        <td>Desa C</td>
                        <td>10:00</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Back Button -->
        <a href="dashboard_warga.html"><button class="back-btn">Kembali ke Dashboard</button></a>
    </div>

</body>
</html>
