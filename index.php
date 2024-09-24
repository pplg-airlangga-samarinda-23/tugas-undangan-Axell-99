<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner:wght@400..700&family=Grey+Qo&family=Macondo&family=Matemasie&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grey+Qo&family=Matemasie&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    <div class="group">
        <div class="ho">
            <h1 class="f">Undangan Pernikahan</h1>
            <h1 class="a">Xenz dan Nazle</h1>
            <div class="carousel">
                <div class="carousel-inner">
                    <img src="img1.jpg" alt="Image 1" class="active">
                    <img src="img2.jpg" alt="Image 2">
                    <img src="img3.jpg" alt="Image 3">
                </div>
                <button class="prev">Prev</button>
                <button class="next">Next</button>
            </div>
            <h4>Kami Mengundang Anda Sekeluarga</h4>
            <h4>Pada Tanggal:27 Agustus 2030</h4>
            <h4>Tempat: Eiffel Tower, Paris</h4>
        </div>

        <br>
        <div style = "background:black;color:white">
            <h3>Lokasi Acara</h3>
            <h3></h3>
        </div>
        <iframe width="425" height="350"
            src="https://www.openstreetmap.org/export/embed.html?bbox=2.1725463867187504%2C48.7935210706521%2C2.435531616210938%2C48.92407837067149&amp;layer=mapnik"
            style="border: 1px solid rgb(0, 0, 0)"></iframe><br /><small><a
                href="https://www.openstreetmap.org/#map=12/48.8588/2.3040">Lihat peta lebih besar</a></small>
        <h4>Lihat peta lebih besar</h4>
        </a></small>
        </a>
    <form action="insert.php" method="post">
        <div style = "background:black;color:white">
        <strong><h3>Ucapan & Doa</h3>
        </strong>
        </div>
        <form action="" method="post">
            <input type="text" name="nama" placeholder="Nama"> <br>
            <textarea name="ucapan" cols="30" rows="4" placeholder="Ucapan"> </textarea> <br>
            <select name="Keterangan">
                <option value="" selected disabled hidden> Konfirmasi Kehadiran</option>
                <option value="1">Ya</option>
                <option value="2">Tidak Hadir</option>
                <option value="3">Tidak Tau</option>
            </select> <br>
            <button type="submit">Kirim</button>
        </form>
        <?php
        include 'koneksi.php';
        $SQL2 = "SELECT * FROM bukutamu ORDER BY id DESC";
        $hasil = $connection->query($SQL2);
        ?>
        <div style="border: 1px solid black;margin:auto; text-align:center; height:200px; width:300px; overflow:scroll;">
            <?php

            while ($baris = $hasil->fetch_row()) {
            ?>
                <div style="background:white;border: 1px solid black;border-color:black; margin:5px; padding:5px;">
                    <p style="font-weight:bold;"><?= $baris[1] ?></p>
                    <p><?= $baris[2] ?></p>
                </div>

            <?php
            }

            $hasil->free_result();
            ?>
        <audio controls autoplay loop src="music.mp3"></audio>
        </div>
</body>

</html>