<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Menyimpan pengaturan pengguna
    if (isset($_POST['saveUserSettings'])) {
        $userRole = $_POST['userRole'];
        $userEmail = $_POST['userEmail'];

        // Simpan data ke database atau file
        echo "Pengaturan Pengguna berhasil disimpan!";
    }

    // Menyimpan pengaturan jadwal monitoring
    if (isset($_POST['saveScheduleSettings'])) {
        $scheduleFrequency = $_POST['scheduleFrequency'];
        $reminderTime = $_POST['reminderTime'];

        // Simpan data ke database atau file
        echo "Pengaturan Jadwal Monitoring berhasil disimpan!";
    }

    // Menyimpan pengaturan laporan
    if (isset($_POST['saveReportSettings'])) {
        $reportFormat = $_POST['reportFormat'];
        $reportFrequency = $_POST['reportFrequency'];

        // Simpan data ke database atau file
        echo "Pengaturan Laporan berhasil disimpan!";
    }
}
?>
