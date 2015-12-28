<!DOCTYPE html>
<html lang="en" style="height:100%; ">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
  
  <!-- // <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="administrator/bootstrap/css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="custom.css">  
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="bower_components/moment/min/moment.min.js"></script>
  
  <script type="text/javascript" src="bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
  <!-- <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
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
        <li><a href="index.php">Beranda</a></li>
      <li><a href="#">Informasi</a></li>
      <li><a href="kamar.php">Kamar</a></li>
      <li><a href="#"><form><input type="text" class="form-control" id="usr" placeholder="Kode Penyewaan"></form></a></li>
      </ul>
    </div>
  </div>
  <div class="container" style="height:auto;">
    <h3 style="text-align:center;">Rubah Detil Penyewaan</h3>
    <div id="batang" style="background-color:rgb(51, 51, 51);height:2px;margin: 0px auto;width: 20%;opacity:0.5;margin-bottom:3%;"></div>
    <div id="baris_ubah_detil" class="row" style="">
      <div class="col-md-3" style="float:left;"></div>
      <div class="col-md-6" style="padding: 2%;float:left;margin-bottom:5%;border:1px solid grey;">
         <div class="row">
           <div class="col-md-6">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th style="padding: 6%;">Nama Penyewa</th>
                  </tr>
                  <tr>
                    <th style="padding: 6%;">Nama Wisma</th>
                  </tr>
                  <tr>
                    <th style="padding: 6%;">Jenis Kamar</th>
                  </tr>
                  <tr>
                    <th style="padding: 6%;">Tanggal Masuk</th>
                  </tr>
                  <tr>
                    <th style="padding: 6%;">Tanggal Keluar</th>
                  </tr>
                  <tr>
                    <th style="padding: 6%;">Fasilitas Tambahan</th>
                  </tr>
                </thead>
              </table>
           </div>
           <div class="col-md-6">
           <form action="">
             <table class="table table-hover">
                <thead>
                  <tr>
                    <th><input id="nama_lengkap" type="text" class="form-control" id="usr" value="Ridho Perdana"></th>
                  </tr>
                  <tr>
                    <th><select id="nama_wisma" class="form-control" id="sel1">
                      <option>Flamboyan</option>
                      <option>Bougenvile</option>
                    </select></th>
                  </tr>
                  <tr>
                    <th><select id="jenis_kamar" class="form-control" id="sel1">
                      <option>VVIP</option>
                      <option>VIP</option>
                    </select></th>
                  </tr>
                  <tr>
                    <th><input id="tanggal_masuk" type="text" class="form-control" id="usr" value="12-12-12"></th>
                  </tr>
                  <tr>
                    <th><input id="tanggal_keluar" type="text" class="form-control" id="usr" value="12-12-12"></th>
                  </tr>
                  <tr>
                    <th><div id="fasilitas_tambahan"><div class="checkbox">
                          <label><input type="checkbox" value="">Kasur</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="">TV</label>
                        </div>
                        <div class="checkbox">
                          <label><input type="checkbox" value="">Handuk</label>
                        </div>
                        </div></th>
                  </tr>
                </thead>
              </table>
            </form>              
           </div>
         </div>
         
      </div>
      <div class="col-md-3" style="float:left;"></div>
    </div>
    <div class="row" style="margin-bottom:2%;">
      <div class="col-md-12" style="width:100%;">
        <div style="text-align:center;">
		<a href="detil_reservasi.php">
        <button id="tombol_konfirmasi" type="button" class="btn btn-info" style="margin: 0px auto;">Konfirmasi</button>
		</a>
        </div>
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
<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker(
          {
            locale: 'en'
          });
    });
</script>
</html>
