<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik - Aplikasi Pemantauan Sampah Di Desa Dukuh</title>
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
        /* Styling untuk kotak informasi */
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
        .box ul {
            list-style-type: none;
            padding-left: 20px;
        }
        .box ul li {
            margin: 10px 0;
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
        /* Styling untuk form input */
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
        <!-- Form untuk menambah jadwal monitoring -->
        <div class="box">
            <h2>Tambah Jadwal Monitoring Sampah</h2>
            <form id="jadwalForm">
                <div class="form-group">
                    <label for="hari">Hari:</label>
                    <select id="hari" name="hari" required>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi:</label>
                    <input type="text" id="lokasi" name="lokasi" required>
                </div>
                <div class="form-group">
                    <label for="waktu">Waktu:</label>
                    <input type="text" id="waktu" name="waktu" required>
                </div>
                <div class="form-group">
                    <button type="submit">Tambah Jadwal</button>
                </div>
            </form>
        </div>

        <!-- Tampilkan jadwal yang sudah disimpan -->
        <div class="box">
            <h2>Jadwal Monitoring Sampah</h2>
            <table id="jadwalTable">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Lokasi</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data akan tampil di sini -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Back Button -->
    <a href="dashboard admin.html"><button class="back-btn">Kembali ke Dashboard</button></a>

    <script>
        // Fungsi untuk menambah jadwal
        document.getElementById('jadwalForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const hari = document.getElementById('hari').value;
            const lokasi = document.getElementById('lokasi').value;
            const waktu = document.getElementById('waktu').value;

            // Ambil jadwal yang sudah ada atau buat array baru
            let jadwal = JSON.parse(localStorage.getItem('jadwal')) || [];

            // Tambahkan jadwal baru ke array
            jadwal.push({ hari, lokasi, waktu });

            // Simpan kembali ke localStorage
            localStorage.setItem('jadwal', JSON.stringify(jadwal));

            // Update tampilan tabel jadwal
            tampilkanJadwal();
        });

        // Fungsi untuk menampilkan jadwal dari localStorage
        function tampilkanJadwal() {
            const jadwal = JSON.parse(localStorage.getItem('jadwal')) || [];
            const tabelBody = document.querySelector('#jadwalTable tbody');
            tabelBody.innerHTML = '';

            jadwal.forEach(item => {
                const tr = document.createElement('tr');
                tr.innerHTML = `<td>${item.hari}</td><td>${item.lokasi}</td><td>${item.waktu}</td>`;
                tabelBody.appendChild(tr);
            });
        }

        // Panggil fungsi untuk menampilkan jadwal saat halaman dimuat
        window.onload = tampilkanJadwal;
    </script>

</body>
</html>
