<?php
    include 'koneksi.php';
    if ($connection->connect_error) {
        echo "Koneksi Gagal :(";
    }
    if (isset($_POST)){
    $nama = @$_POST['nama'];
    $ucapan = @$_POST['ucapan'];
    $keterangan = @$_POST['Keterangan'];

    if ($nama != "" && $ucapan != "" && $keterangan != "") {
        $sql = "INSERT INTO bukutamu (nama,ucapan,Keterangan) VALUES ('$nama', '$ucapan', '$keterangan')";

        $connection->query($sql);

    }
    header("Location: http://tugas-undangan-axell-99.test/");
    }
    ?>