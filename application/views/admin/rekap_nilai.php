<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekapitulasi Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        width: 100%;
        height: 95vh;
        background-color: #47436f;
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
    table{
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }
    th,td {
        text-align: left;
        padding: 8px;
    }
    tr: :nth-child(even){background-color:#f2f2f2}
   </style> 
<body>
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
                    <h1>Rekapitulasi Nilai Mahasiswa</h1>
                </div>
                <a class="btn btn-warning mb-3" href="<?php echo base_url('Nilai/create'); ?>">Edit</a>
            </div>
        </div>
        <div style="overflow: auto;">
            <table>
                <?php 
                    foreach ($nilai as $n): ?>
                <tr>
                <td><?php echo $n->mahasiswa_nama; ?></td> 
                <td><?php echo $n->matakuliah_nama; ?></td> 
                <td><?php echo $n->nilai; ?></td> 
                <td> 
                    <a href="" onlick="return confirm('Hapus data?');">Hapus</a>
            </td>

                </tr>
                    <?php endforeach; ?>
            </table>
        </div>
    
</body>
</html>