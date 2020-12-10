<?php
	include_once("koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login </title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" type="text/css" href="css/style-login.css">
</head>

<body class="login_body">
	<div class="card">
		<div class="content">
			<div class="title">
				<h2> LOGIN </h2>
				<div class="underline"> </div>
			</div>

			<?php 
				if(isset($_GET['pesan'])){
					if($_GET['pesan']=="gagal"){
						echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
					}
				}
			?>

			<form action="cek_login.php" method="post" class="form">
				<label for="username" style="padding-top:13px">&nbsp;username</label>
  				<input id="username" class="form-content" type="text" name="username" autocomplete="on" required />
  				<div class="form-border"></div>

  				<label for="password" style="padding-top:22px">&nbsp;Password</label>
  				<input id="password" class="form-content" type="password" name="password" required />
  				<div class="form-border"></div>

  				<button type="submit" name="submit" id="submit" class="tombol_login"> LOGIN </button>

  			<!--
  				<p> Dont Have Account? <a href="register.html"> Sign in here </a> </p>
  			-->
			</form>
			
		</div>
	</div>

</body>
</html>