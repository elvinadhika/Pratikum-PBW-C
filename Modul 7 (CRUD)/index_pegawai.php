<?php
include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa ORDER BY nim DESC");
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

    	<?php
    		session_start();

    		if($_SESSION['role']==""){
    			echo "<script>alert('Anda Belum Login');location='login.php';</script>";
    		}
    	?>

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Data Mahasiswa</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            	<?php 
					if(isset($_GET['pesan'])){
						if($_GET['pesan']=="gagal"){
							echo "<div class='alert'>Gagal</div>";
						}
					}
				?>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i> Hallo,
                    	<b> <?php echo $_SESSION['nama'] ?> </b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="proses/logout.php">Logout</a>
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
                                <a href="tambah.php"> <i class="fas fa-user-plus"></i> &nbsp; Tambah Data </a>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Mahasiswa
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            	<th>No.</th>
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th>Telp</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>Prodi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            	<th>No.</th>
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th>Telp</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>Prodi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            	$no = 1;  
											    while($user_data = mysqli_fetch_array($result)) {         
											        echo "<tr>";
											        echo "<td>".$no."</td>";
											        echo "<td>".$user_data['nim']."</td>";
											        echo "<td>".$user_data['nama']."</td>";
											        echo "<td>".$user_data['telp']."</td>";
											        echo "<td>".$user_data['alamat']."</td>";
											        echo "<td>".$user_data['email']."</td>";
											        echo "<td>".$user_data['prodi']."</td>";    
											        echo "<td>
											        		<a href='edit.php?nim=$user_data[nim]'>
																<button class='btn btn-success btn-sm'> <i class='fa fa-edit'></i> Edit </button>
															</a>

											        	  </td>
											        	  </tr>";
											    $no++;        
											    }
											?>
                                        </tbody>
                                    </table>
                                </div>
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
