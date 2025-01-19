<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" href="index.css"
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
    padding: 10px 25px 20px;
    text-align: left;
    top: 0;
    overflow: auto;
  }
  

  .img {
    width: 50px;
    height: 50px;
  }

  .button {
    position: fixed;
    right: 30%;
    padding: 10px 20px;
    background-color: rgb(226, 15, 15);
    border: none;
    float: right;
    clear: both;
  }


  .sidebar {
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
    overflow-y: auto;
  }

  .sidebar a {
    display: block;
    color: black;
    padding: 16px;
    text-decoration: none;
  }

  .sidebar a.active {
    background-color: #4a067b;
    color: white;
  }

  .sidebar a:hover:not(.active) {
    background-color: #8f8b90;
    color: white;
  }

  div.content {
    margin-left: 200px;
    padding: 1px 16px;
    height: 1000px;
  }

  @media screen and (max-width: 700px) {
    .sidebar {
      width: 100%;
      height: auto;
      position: relative;
    }

    .sidebar a {
      float: left;
    }

    div.content {
      margin-left: 0;
    }
  }

  @media screen and (max-width: 400px) {
    .sidebar a {
      text-align: center;
      float: none;
    }
  }

  * {
    box-sizing: border-box;
  }

  .column {
    float: right;
    width: 19.33%;
    height: ;
    padding: 10px;
    margin-top: 20px;
    margin-right:20px;
    margin: 10px;
  }

  .row:after {
    content: "";
    display: table;
    clear: both;
  }
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
      <div class="d-flex">
        <a class="text-warning  text-decoration-none" href="<?php echo base_url('logout');?>" style="margin-left: 850px;">Log Out</a>
      </div>
    
  
    </nav>
  </header>
  
  <div class="sidebar">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-sm-2 pt-2 text-black min-vh-50 ">
      <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-black text-decoration-none">
        <span class="fs-5 d-none d-sm-inline">Profil</span>
      </a>
      <img src="profile-icon.jpg" alt="Profile Picture" style="width: 70px;height:70px;" class="rounded-circle">
      <h5><?php echo $this->session->userdata('name'); ?></h5>
      <!-- <p>23.01.5008</p> -->
     <div class="btn-group-sm">
      <button class="btn btn-secondary" type="submit">Lihat Profil</button> 
      <button class="btn btn-secondary" type="submit">Foto Profil</button>

     </div>
     
      <a class="active" href="#home">Dashboard</a>
      <a href="">Panduan Aplikasi&Fitur</a>
      <a href="">Email</a>
      <a href="<?php echo base_url('Mahasiswa/index');?>">Mahasiswa</a>
      <a href="<?php echo base_url("Nilai/index");?>">Rekapitulasi Nilai</a>
      <a href="">Info Kuliah</a>
     
    </div>
  </div>

  <div class="content">
    <div class="dashboard">
      <h3>DASHBOARD DOSEN</h3>
      <div class="row">
        <div class="column" style="background-color:#c2c4c6;">
          <h2>QR Dosen</h2>
          <img src="qr.jpg" class="card-img-top" alt="qr">
        </div>
        <div class="column" style="background-color:#bbb;">
          <h2>Status di semester</h2>
          <img src="uyey" class="card-img-top" alt="">
        </div>
        <div class="row">
        <div class="column" style="background-color:#ccc;">
          <h2>Pilih Jadwal</h2>
          
        </div>
      </div>
    </div>


      </center>
    </div>




</body>

</html>