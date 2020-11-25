<!DOCTYPE html>
<html>

  <head>
  	<title> Tugas 6 </title>

  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body>
  	<div class="card">
  		<div class="content">
  			<div class="title">
  				<h3> DATA MAHASISWA </h2>
  				<div class="underline"> </div>
  			</div>

  			<form method="post" action="hasil.php" class="form">
  				  <label for="name" style="padding-top:13px">&nbsp;Nama Lengkap</label>
    				<input id="nama" class="form-content" type="text" name="name" autocomplete="on" required />
    				<div class="form-border"></div>

    				<label for="user-email" style="padding-top:22px">&nbsp;NIM</label>
    				<input id="nim" class="form-content" type="number" name="nim" required />
    				<div class="form-border"></div><br>
            <br>

            <div class="title">
              <h3> NILAI MAHASISWA </h2>
              <div class="underline"> </div>
            </div>

            <label for="name" style="padding-top:13px">&nbsp;Nilai Tugas Anda</label>
            <input id="tugas" class="form-content" type="number" name="tugas" autocomplete="on" required />
            <div class="form-border"></div>

            <label for="user-email" style="padding-top:22px">&nbsp;Nilai UTS Anda</label>
            <input id="uts" class="form-content" type="number" name="uts" required />
            <div class="form-border"></div>

            <label for="name" style="padding-top:13px">&nbsp;Nilai UAS Anda</label>
            <input id="uas" class="form-content" type="number" name="uas" autocomplete="on" required />
            <div class="form-border"></div>

            <br><br>
            <input type="submit" name="submit" class="submit" value="submit" />
  			</form>			
  		</div>
  	</div>
  </body>

  <!-- JS -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>

</html>