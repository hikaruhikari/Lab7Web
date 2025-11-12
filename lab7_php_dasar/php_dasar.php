<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Dasar</title>
    </head>
    <body method="GET">
        <h1>Belajar PHP Dasar</h1>
        <form action="" method="POST">
            Masukkan Nama :
            <input type="text" name="nama">
            <input type="submit" value="Kirim">
        </form>
        <?php
            echo "Hello World" . "<br>" . "<br>";
            $nim = "0411500400";
            $nama = 'Abdullah';
            echo "NIM : " . $nim . "<br>" . "<br>";
            echo "Nama : $nama";
            echo "<br>";
            $_GET['nama'] = 'Abdullah';
            echo 'Selamat Datang ' . $_GET['nama'] . "<br>" . "<br>";
            echo 'Selamat Datang ' . $_POST['nama'] . "<br>" . "<br>";
            $gaji = 1000000;
            $pajak = 0.1;
            $thp = $gaji - ($gaji*$pajak);
            echo "Gaji sebelum pajak = Rp. $gaji <br>";
            echo "Gaji yang dibawa pulang = Rp. $thp" . "<br>" . "<br>";
            $nama_hari = date("l");
                if ($nama_hari == "Sunday") {
                echo "Minggu" . "<br>" . "<br>";
                } elseif ($nama_hari == "Monday") {
                echo "Senin" . "<br>" . "<br>";
                } else {
                echo "Selasa" . "<br>" . "<br>";
                }
            switch ($nama_hari) {
                case "Sunday":
                    echo "Minggu" . "<br>" . "<br>";
                    break;
                case "Monday":
                    echo "Senin" . "<br>" . "<br>";
                    break;
                case "Tuesday":
                    echo "Selasa" . "<br>" . "<br>";
                    break;
                default:
                    echo "Sabtu" . "<br>" . "<br>";
                }
            echo "Perulangan 1 sampai 10 <br />";
            for ($i=1; $i<=10; $i++) {
                echo "Perulangan ke: " . $i . '<br />';
            }
            echo "Perulangan Menurun dari 10 ke 1 <br />";
            for ($i=10; $i>=1; $i--) {
                echo "Perulangan ke: " . $i . '<br />';
            }
            echo "Perulangan 1 sampai 10 <br />";
            $i=1;
            while ($i<=10) {
                echo "Perulangan ke: " . $i . '<br />';
            $i++;
            }
            echo "Perulangan 1 sampai 10 <br />";
            $i=1;
            do {
                echo "Perulangan ke: " . $i . '<br />';
                $i++;
            } while ($i<=10);
        ?>
    </body>
</html>