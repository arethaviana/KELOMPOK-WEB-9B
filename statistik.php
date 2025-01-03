<?php
// statistik.php
?>

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
    </style>
</head>
<body>

    <div class="content">
        <h1>Statistik Pemantauan Sampah Di Desa Dukuh</h1>

        <div class="box">
            <h2>1. Jenis Sampah</h2>
            <p>Statistik ini menggambarkan distribusi sampah berdasarkan jenisnya:</p>
            <ul>
                <li><strong>Sampah Organik:</strong> Sampah yang dapat terurai secara alami, seperti sisa makanan dan dedaunan.</li>
                <li><strong>Sampah Anorganik:</strong> Sampah yang tidak dapat terurai secara alami, seperti plastik, logam, kaca, dan kertas.</li>
                <li><strong>Sampah B3 (Berbahaya dan Beracun):</strong> Sampah yang memiliki sifat berbahaya, seperti baterai, cat, atau bahan kimia berbahaya lainnya.</li>
            </ul>
        </div>

        <div class="box">
            <h2>2. Volume Sampah</h2>
            <p>Statistik ini menunjukkan jumlah sampah yang dihasilkan dalam periode tertentu, misalnya per hari, minggu, atau bulan.</p>
        </div>

        <div class="box">
            <h2>3. Persentase Sampah Berdasarkan Jenis</h2>
            <p>Statistik ini menggambarkan persentase dari total volume sampah yang dihasilkan, berdasarkan kategori jenis sampah.</p>
        </div>

        <div class="box">
            <h2>4. Tren Pengelolaan Sampah</h2>
            <p>Menggunakan data historis untuk melihat tren pengelolaan sampah dari waktu ke waktu, apakah volume sampah meningkat atau menurun.</p>
        </div>

        <div class="box">
            <h2>5. Data Lokasi</h2>
            <p>Statistik juga bisa mencakup data berdasarkan lokasi, seperti wilayah pengelolaan sampah.</p>
        </div>

        <div class="box">
            <h2>6. Efektivitas Program Pengelolaan Sampah</h2>
            <p>Statistik ini menunjukkan seberapa efektif suatu program pengelolaan sampah, seperti program daur ulang atau edukasi masyarakat.</p>
        </div>

        <div class="box">
            <h2>7. Sampah yang Didaur Ulang</h2>
            <p>Statistik ini menunjukkan berapa banyak sampah yang berhasil didaur ulang dibandingkan dengan sampah yang dibuang.</p>
        </div>

        <div class="box">
            <h2>Manfaat Statistik dalam Aplikasi Pemantauan Sampah</h2>
            <ul>
                <li><strong>Perencanaan yang lebih baik:</strong> Dengan data statistik yang jelas, pihak pengelola dapat merencanakan jalur pengumpulan sampah, alokasi sumber daya, atau kebijakan baru yang lebih efektif.</li>
                <li><strong>Peningkatan kesadaran warga:</strong> Statistik dapat menunjukkan seberapa banyak sampah yang dihasilkan, yang dapat meningkatkan kesadaran  untuk mengurangi sampah dan mendaur ulang.</li>
                <li><strong>Evaluasi program:</strong> Statistik membantu dalam mengevaluasi apakah program pengelolaan sampah berjalan dengan baik, serta memberikan gambaran tentang area yang perlu diperbaiki.</li>
                <li><strong>Penyusunan kebijakan:</strong> Pemerintah atau organisasi terkait dapat menggunakan data statistik untuk menyusun kebijakan yang lebih efektif dalam mengelola sampah.</li>
            </ul>
        </div>

        <p>Statistik dalam aplikasi ini sangat penting karena memberikan gambaran yang jelas tentang situasi pengelolaan sampah, membantu dalam pengambilan keputusan, dan meningkatkan efisiensi dalam mengelola sampah di masyarakat.</p>

        <!-- Back Button -->
        <a href="dashboard admin.html"><button class="back-btn">Kembali ke Dashboard</button></a>
    </div>

</body>
</html>
