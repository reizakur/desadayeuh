<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/pengaduan.css">
    <title>Pengaduan</title>
</head>

<body>
    <div class="Form">
        <form action="data_pengaduan.php" method="post" enctype="multipart/form-data">
            <h1>Form Pengaduan</h1>
            <li>
                <div class="Nama">
                    <p>Nama</p>
                    <input type="text" name="nama" size="55">
                </div>
            </li>
            <li>
                <div class="Judul">
                    <p>Judul</p>
                    <input type="text" name="judul" size="55">
                </div>
            </li>
            <li>
                <div class="Deskripsi">
                    <p>Deskripsi</p>
                    <textarea name="deskripsi" id="" cols="50" rows="10"></textarea>
                </div>
            </li>
            <input type="file" id="inputimg" name="gambar"><br>
            <p><?php

                setlocale(LC_TIME, 'id_ID');

                date_default_timezone_set('Asia/Jakarta');
                $tanggal = date('l, d F Y');
                echo $tanggal;
                ?></p>
            <br>
            <input type="submit" value="Kirim"> <input type="reset" value="Batal">
        </form>
    </div>
</body>

</html>