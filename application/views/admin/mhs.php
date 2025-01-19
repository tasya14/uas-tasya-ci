<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        width: 100%;
        height: 95vh;
        background-color: #45407b;
        color: white;
    }

    nav {
        display: flex;
        flex-direction: row;
        gap: 20px;
        align-items: center;
        background-color: #140024;
        padding: 5px 5px 1px;
        text-align: left;
        top: 0;
        overflow: auto;
    }

    .img {
        width: 50px;
        height: 50px;
    }

    .title {
        font-size: 20px;
        font-weight: 600;
    }
    .button {
        position: absolute;
        right: 30%;
        padding: 10px 20px;
        background-color: rgb(213, 91, 25);
        border: none;
    }
</style>
<header>
    <nav>
        <img class="img"
            src="https://play-lh.googleusercontent.com/YwSG-xuMCYLCJ7FuNotGBTLk9sILFHitz4g4slQFCN9bRzUvOqqmzQwsaVCrtyMHgO_D=w240-h480-rw"
            alt="">
        <div>
            <span class="title">UNIVERSITAS AMIKOM YOGYAKARTA</span>
        </div>
    </nav>

</header>

<body>
    <div class="form">
        <div class="login-form">
            <div class="container-fluid p-5 text-white text-center">
                <h1>Tambah Data Mahasiswa</h1>
            </div>
        </div>
    </div>
    <div>
        <center>
        <a href="<?php echo site_url('mahasiswa/create'); ?>">Tambah Mahasiswa</a>

        <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
    <?php foreach ($mahasiswa as $m): ?>
        <tr>
            <td><?php echo $m->nim; ?></td>
            <td><?php echo $m->nama; ?></td>
            <td>
                <a href="<?php echo site_url('mahasiswa/delete/'.$m->id); ?>" onclick="return confirm('Hapus data?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
        </table>
        </center>
       
</body>

</html>