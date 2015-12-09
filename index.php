<!DOCTYPE html>
<html lang="en" style="height:100%; ">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="administrator/bootstrap/css/bootstrap.min.css">
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="custom.css">  
</head>
<body style="margin:0;font-family:'Roboto', sans-serif;height:100%;overflow-x:hidden;">
<div class="row" id="header" style="margin:0;background-color:#303f9f;box-shadow: 3px 2px 10px #888888;">
  <div id="kotak_header" style="padding:3%;color:white;">
    <h1>WISHMILAK</h1>
    <div id="batang" style="width:10%;background-color:white;height:2px;"></div>
    <h5>Sistem informasi Wisma Institut Teknologi Sepuluh Nopember</h5>
  </div>
<!--   <nav>
    <ul style="display:inline-block;">
      <li><div id="navbar"><a href="">HOME</a></div></li>
      <li><div id="navbar"><a href="">INFORMASI</a></div></li>
    </ul>
  </nav> -->
  <div id="navbar">
    <ul class="nav navbar-nav navbar-right" style="background-color:white;">
      <li><a href="#">Beranda</a></li>
      <li><a href="#">Informasi</a></li>
      <li><a href="#"><form><input type="text" class="form-control" id="usr" placeholder="Kode Penyewaan"></form></a></li>
    </ul>
  </div>
</div>
<div class="container" style="height:100%;">
<h3 style="text-align:center;font-style:italic">Promo terbaru</h3>
<div id="batang" style="background-color:rgb(51, 51, 51);height:2px;margin: 0px auto;width: 20%;opacity:0.5;"></div>
  <div id="baris_promo" class="row">
    <div id="kolom_promo" class="col-md-6" style="">
      <img id="foto_promo" src="foto.jpg" style="">
      <div id="tulisan" style="">
        <h3>Column 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>
    </div>
    <div id="kolom_promo" class="col-md-6" style="">
      <img id="foto_promo" src="foto.jpg" style="">
      <div id="tulisan" style="">
        <h3>Column 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>
    </div>
  </div>
  <div class="row" style="margin-top:5%;">
    <!-- <div id="batang" style="width:100%;background-color:rgb(51, 51, 51);height:2px;opacity:0.5;"></div> -->
    <div id="tombol_pesan">
      <a style="color:white;font-size:1.3em;font-weight:500;text-decoration: none;" href="pesan.php">PESAN KAMAR</a>
    </div>
  </div>
  
</div>
<div class="row" id="footer" style="background-color:#424242;width:100%;margin:0;float:left;padding-bottom:3%;">
  <div class="col-md-4" id="kolom_footer">
    <h3>Hubungi kami</h3>
    <p>Institut Teknologi Sepuluh Nopember, Surabaya</p>
    <uL>
      <li style="text-decoration:none;"><strong>Ridho Perdana</strong> 5113100164</li>
      <li style="text-decoration:none;"><strong>Bandem Suardika</strong> 5113100164</li>
      <li style="text-decoration:none;"><strong>Faris Musthafa</strong> 5113100164</li>
    </uL>
  </div>
  <div class="col-md-4" id="kolom_footer">
  </div>
  <div class="col-md-4" id="kolom_footer">
    <h3>Hubungi kami</h3>
    <p>Institut Teknologi Sepuluh Nopember, Surabaya</p>
    <uL>
      <li style="text-decoration:none;"><strong>Ridho Perdana</strong> 5113100164</li>
      <li style="text-decoration:none;"><strong>Bandem Suardika</strong> 5113100164</li>
      <li style="text-decoration:none;"><strong>Faris Musthafa</strong> 5113100164</li>
    </uL>
  </div>
</div>
</body>
</html>
