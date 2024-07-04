<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Antrian</title>
    <link rel="stylesheet" type="text/css" href="css/proses.css"> 
</head>
<body>
<div class="message-box">
    <?php
    // Ambil data dari form
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $telepon = $_POST['telepon'];

    $fp = fopen("antrian.txt", "a+");

    // Tambahkan data antrian ke dalam file
    if ($fp) {
        $data = "$nama|$tanggal|$jam|$telepon\n";
        fputs($fp, $data);
        fclose($fp);

        echo "<p>Terima Kasih Telah Mendaftar Antrian</p>";
    } else {
        echo "<p class='error'>Gagal membuka file antrian.txt</p>";
    }

    echo "<a href='antrian.html'>Kembali ke Formulir Antrian</a>";
    echo "<a href='daftra_antrian.php'>Lihat Daftar Antrian</a>";
    ?>
</div>
</body>
</html>
