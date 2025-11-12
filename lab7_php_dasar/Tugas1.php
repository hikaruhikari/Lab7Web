<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Masukkan Nama :
        <input type="text" name="nama"><br>
        Tanggal Lahir :
        <input type="date" name="tgl_lahir"><br>
        Pekerjaan :
        <select name="pekerjaan">
            <option value="dokter">Dokter</option>
            <option value="guru">Guru</option>
            <option value="karyawan">Karyawan</option>
            <option value="sales">Sales</option>
        </select><br>
        <input type="submit" value="Kirim">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nama = $_POST['nama'];
                $tgl_lahir = $_POST['tgl_lahir'];
                $pekerjaan = $_POST['pekerjaan'];

                echo "<h2>Data yang Dikirim:</h2>";
                echo "Nama: " . htmlspecialchars($nama) . "<br>";
                echo "Tanggal Lahir: " . htmlspecialchars($tgl_lahir) . "<br>";
                echo "Umur: " . (date("Y") - date("Y", strtotime($tgl_lahir))) . " tahun<br>";
                echo "Pekerjaan: " . htmlspecialchars($pekerjaan) . "<br>";
                echo "Gaji: Rp. ";
                switch ($pekerjaan) {
                    case 'dokter':
                        echo "8.000.000";
                        break;
                    case 'guru':
                        echo "5.000.000";
                        break;
                    case 'karyawan':
                        echo "4.000.000";
                        break;
                    case 'sales':
                        echo "3.000.000";
                        break;
                    default:
                        echo "0";
                }
            }
        ?>
</body>
</html>