<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | PW2</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body> WEB DEVELOPMENT | FIRMAN ASHARUDIN <div class="w3-bar w3-border w3-light-grey w3-card-4">
      <a href="#" class="w3-bar-item w3-blue w3-button">Home</a> <?php if($this->session->userdata('access')=='Administrator'){ ?> <a href="#" class="w3-bar-item w3-button">Daftar Dosen</a>
      <a href="#" class="w3-bar-item w3-button">Daftar Mahasiswa</a>
      <a href="#" class="w3-bar-item w3-button">Daftar Mata Kuliah</a> <?php } if($this->session->userdata('access')=='Dosen'){ ?> <a href="#" class="w3-bar-item w3-button">Daftar Mahasiswa</a> <?php } if($this->session->userdata('access')=='Mahasiswa'){ ?> <a href="#" class="w3-bar-item w3-button">Daftar Mata Kuliah</a> <?php }; ?> <a href="
							<?php echo base_url('logout');?>" class="w3-bar-item w3-button w3-red w3-right">Keluar </a>
    </div>
    <div class="w3-container">
      <h1>Hai <?php echo $this->session->userdata('name'); ?> </h1>
      <h3>Ini adalah halaman untuk <?php echo $this->session->userdata('access'); ?> </h3> WEB DEVELOPMENT | FIRMAN ASHARUDIN
    </div>
  </body>
</html>