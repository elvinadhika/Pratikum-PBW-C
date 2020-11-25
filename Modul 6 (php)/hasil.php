<?php
    if(isset($_POST)){
      //data mahasiswa
      $nama = $_POST["name"];
      $nim = $_POST["nim"];

      //nilai awal
      $tugas = $_POST["tugas"];
      $uts = $_POST["uts"];
      $uas = $_POST["uas"];

      //nilai sesuai presentase penilain
      $nilai_tugas = $tugas*(40/100);
      $nilai_uts = $uts*(30/100);
      $nilai_uas = $uas*(30/100);

      $nilai_total = $nilai_tugas+$nilai_uts+$nilai_uas;

      //predikat
      $A = "Anda Lulus dengan Predikat A";
      $B = "Anda Lulus dengan Predikat B";
      $C = "Anda Lulus dengan Predikat C";

      if($nilai_total >= 80){
        ?>
        <div class="card-predikat">
          <div class="content-predikat">
            <div class="title">
              <h3> Anda Lulus dengan Predikat A</h2>
            </div>
          </div>
        <div>
        <?php
      }

      elseif ($nilai_total >= 70) {
        ?>
        <div class="card-predikat">
          <div class="content-predikat">
            <div class="title">
              <h3> Anda Lulus dengan Predikat B</h2>
            </div>
          </div>
        <div>
        <?php
      }

      elseif ($nilai_total >= 60) {
        ?>
        <div class="card-predikat">
          <div class="content-predikat">
            <div class="title">
              <h3> Anda Lulus dengan Predikat C</h2>
            </div>
          </div>
        <div>
        <?php
      }

      else {
        ?>
        <div class="card-predikatD">
          <div class="content-predikat">
            <div class="title">
              <h3>Maaf Anda Tidak Lulus! Belajar Lagi ya</h2>
            </div>
          </div>
        <div>
        <?php
      }
    }
?>


<!DOCTYPE html>
<html>

  <head>
  	<title> Tugas 6 </title>

  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body>
  	<div class="card-hasil">
  		<div class="content">
  			<div class="title">
  				<h3> DATA MAHASISWA </h2>
  				<div class="underline"> </div>
  			</div>

  			<form method="get" action="index.php" class="form">

  				  <label for="name" style="padding-top:13px">&nbsp;Nama Lengkap</label>
    				<input id="name" class="form-content" type="text" name="name" autocomplete="on" value="<?php echo $nama ?>" readonly/>
    				<div class="form-border"></div>

    				<label for="user-email" style="padding-top:22px">&nbsp;NIM</label>
    				<input id="nim" class="form-content" type="number" name="nim" value="<?php echo $nim ?>" readonly />
    				<div class="form-border"></div><br>
            <br>

            <div class="title">
              <h3> NILAI MAHASISWA </h2>
              <div class="underline"> </div>
            </div>

            <label for="name" style="padding-top:13px">&nbsp;Nilai Tugas Anda</label>
            <input id="tugas" class="form-content" type="number" name="tugas" autocomplete="on" value="<?php echo $tugas ?>" readonly/> 
            <div class="form-border"></div>

            <label for="user-email" style="padding-top:22px">&nbsp;Nilai UTS Anda</label>
            <input id="uts" class="form-content" type="number" name="uts" value="<?php echo $uts ?>" readonly/>
            <div class="form-border"></div>

            <label for="name" style="padding-top:13px">&nbsp;Nilai UAS Anda</label>
            <input id="uas" class="form-content" type="number" name="uas" autocomplete="on" value="<?php echo $uas ?>" readonly/>
            <div class="form-border"></div>

            <label for="name" style="padding-top:13px">&nbsp;Total Nilai Anda</label>
            <input id="uas" class="form-content" type="number" name="uas" autocomplete="on" value="<?php echo $nilai_total ?>" readonly/>
            <div class="form-border"></div>
  			</form>
  			
  		</div>
  	</div>
  </body>

  <!-- JS -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

</html>