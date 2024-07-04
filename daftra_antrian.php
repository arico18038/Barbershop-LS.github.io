<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Antrian</title>
    <link rel="stylesheet" href="css/proses.css">
</head>
<body>
    <div class="table-container">
        <h1>Daftar Antrian</h1>
        <?php
        // Buka file antrian.txt
        $file_path = 'antrian.txt';
        $fp = fopen($file_path, "r");

        if ($fp) {
            echo "<table border='1' cellpadding='10' cellspacing='0'>";
            echo "<tr><th>Nama</th><th>Tanggal</th><th>Jam</th><th>Telepon</th></tr>";

            // Baca file per baris
            while ($isi = fgets($fp)) {
                $pisah = explode("|", trim($isi));
                if (count($pisah) >= 4) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($pisah[0]) . "</td>";
                    echo "<td>" . htmlspecialchars($pisah[1]) . "</td>";
                    echo "<td>" . htmlspecialchars($pisah[2]) . "</td>";
                    echo "<td>" . htmlspecialchars($pisah[3]) . "</td>";
                    echo "</tr>";
                }
            }

            fclose($fp);
            echo "</table>";
        } else {
            echo "<p>Tidak dapat membuka file antrian.</p>";
        }
        ?>
        <p><a href="antrian.html">Klik Disini</a> untuk Antri.</p>
    </div>
</body>
</html>
