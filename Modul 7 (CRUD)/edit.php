<?php 
	include "koneksi.php";

$nim = $_GET['nim'];

$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE nim=$nim");

while($user_data = mysqli_fetch_array($result)) {
	$nim = $user_data['nim'];
	$nama = $user_data['nama'];
	$telp = $user_data['telp'];
	$alamat = $user_data['alamat'];
	$email = $user_data['email'];
	$prodi = $user_data['prodi'];
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tugas 7 - 1808561052</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Data Mahasiswa</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">

                	<!--TAMBAH SESSIEN NAMA USER-->
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <div class="card mb-4">
                            <div class="card-body">
                                <a href="index.php"> <i class="fas fa-arrow-circle-left"></i> &nbsp; Back to dashboard </a>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Tambah Data Mahasiswa
                            </div>
                            <div class="card-body">
                                
                                <form method="POST" action="edit_aksi.php">
									<div class="row">
										<div class="col-sm-6 offset-sm-3">
											<div class="form-group">
												<label>NIM</label>
												<input type="number" name="nim" id="nim" class="form-control" value=<?php echo $nim;?> readonly>
											</div>

											<div class="form-group">
												<label>Nama Mahasiswa</label>
												<input type="text" name="nama" id="nama" class="form-control" required="true" value=<?php echo $nama;?>>
											</div>

											<div class="form-group">
												<label>No. Telepon</label>
												<input type="number" name="telp" id="telp" class="form-control" required="true" value=<?php echo $telp;?>>
											</div>

											<div class="form-group">
												<label>Alamat</label>
												<textarea name="alamat" id="alamat" class="form-control" required="true"> <?php echo $alamat;?> </textarea>
											</div>

											<div class="form-group">
												<label>Email</label><br>
												<input type="email" name="email" id="email" class="form-control" required="true" value=<?php echo $email;?>>
											</div>

											<div class="form-group">
												<label>Program Studi</label>
												<select name="prodi" id="prodi" class="form-control" required="true">
													<option value=<?php echo $prodi; ?>> <?php echo $prodi; ?></option>
												</select>
											</div>

											<div class="form-group">
												<button type="submit" name="update" id="update" class="btn btn-primary">
													<i class="fa fa-save"></i> Update
												</button>
											</div>

										</div>
									</div>
								</form>

                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>