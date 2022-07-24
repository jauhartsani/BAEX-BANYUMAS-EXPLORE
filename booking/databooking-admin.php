<!-- Nama Kelompok : Dewa Kipas
Anggota : 
1. Meli dini afrian
2. Muhammad Jauhar Alfi Tsani
3. Rochmat Indrajaya -->

<?php

	session_start();

	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
		header('location: login.php');
		exit;
	}
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>BAEX | Banyumas Explore And Booking Ticket</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon1.ico">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="../vendors/plyr/plyr.css" rel="stylesheet">
    <link href="../assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg fixed-top py-3 backdrop" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="#"> <img class="d-inline-block align-top img-fluid" src="assets/img/gallery/logo-icon.png" alt="" width="50" />
          <span class="text-primary fs-4 ps-2">BAEX</span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="/index.html">Home</a></li>
              <li class="nav-item"><a class="nav-link text-600" href="/tracking.html">Tracking</a></li>
              <li class="nav-item"><a class="nav-link text-600" href="/galery.html">Gallery</a></li>
              <li class="nav-item"><a class="nav-link text-600" href="#"><?php echo $_SESSION['username']; ?> </a></li>


              
            </ul>
          </div>
        </div>
      </nav>
      <section class="py-0">
        </div>
        <!--/.bg-holder-->
		
      </section>
      <!-- <section> close ============================-->
<body>
<br><br><br><br>
<div class="row flex-center mb-5">
<div class="col-lg-8 text-center">
<h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5"> Data Penjualan Tiket BAEX </h1></p>
	<br/>
	<br>
	<br>
    <style>
    table {
    border-collapse: collapse;
    width: 100%;
    color: #4e95ff;
    font-size: 15px;
    text-align: center;
    }
    th {
    background-color: #4e95ff;
    color: white;
    }
    tr:nth-child(even) {background-color: #f2f2f2}
    </style>
    </head>
    <body>
    <table>
    <tr>
    <th>Id Tiket</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Nomor Telepon</th>
    <th>Tanggal Berwisata</th>
    <th>Tempat Wisata</th>
    <th>Jumlah Tiket</th>
    <th>Hapus</th>
    </tr>
    
    <?php
    $conn = mysqli_connect('localhost','kelasmmx','84y79Dp@WFvWb-','kelasmmx_Dewa-Kipas');
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT *from baex";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" 
    . $row["nama"] . "</td><td>"
    . $row["email"] . "</td><td>"
    . $row["nomorhp"] . "</td><td>"
    . $row["tanggal"] . "</td><td>"
    . $row["wisata"] . "</td><td>"
    . $row["jumlah"] . "</td><td>"
    . "<a href='../booking/hapus_data.php?id=$row[id]'> Delete </a></td></tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
    </table>
	</body>
  <style>
        .wrapper{ 
        	width: 500px; 
        	padding: 20px; 
        }
        .wrapper h2 {text-align: center}
        .wrapper form .form-group span {color: red;}
	</style>
</head>
<body>
	<main><br><br><br>
			<a href="../admin/password_reset.php" class="btn btn-block btn-outline-warning">Reset Password</a>
			<a href="../admin/logout.php" class="btn btn-block btn-outline-danger">Sign Out</a>
		</section>
	</main>

      <!-- <section> begin ============================-->
      <section class="py-6">

        <div class="container">
          <div class="row flex-center">
            <div class="col-auto mb-4">
              <ul class="list-unstyled list-inline mb-0">
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="../index.html">Home</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="../tracking.html">Tracking</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="../galery.html">Gallery</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="../user/index.php">Booking</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="#!">Contact</a></li>
                <li class="list-inline-item me3 me-sm-4"><a class="text-dark text-decoration-none" href="#!">About Us</a></li>
              </ul>
            </div>
          </div>        
      <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../vendors/@popperjs/popper.min.js"></script>
    <script src="../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../vendors/is/is.min.js"></script>
    <script src="../vendors/plyr/plyr.polyfilled.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
  </body>
</html>