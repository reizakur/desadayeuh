<!DOCTYPE html>

<html lang="en">
<?php 
include ('sistem/koneksi.php');

$id_jenis=$_GET['id_jenis'];
   

 
$sql= mysqli_query($con,"SELECT * FROM jenis WHERE id_jenis='$id_jenis'");
$tampil= mysqli_fetch_array($sql);
$id_jenis = $tampil['id_jenis'];
?>
<head>



  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">

  <meta name="author" content="">



  <title>Desa Dayeuh</title>



  <!-- Bootstrap core CSS -->

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



  <!-- Custom fonts for this template -->

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>



  <!-- Custom styles for this template -->

  <link href="css/clean-blog.min.css" rel="stylesheet">



</head>



<body>



  <!-- Navigation -->

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">

    <div class="container">

      <a class="navbar-brand" href="index.php">Desa Dayeuh</a>

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

        Menu

        <i class="fas fa-bars"></i>

      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav ml-auto">

          <li class="nav-item">

            <a class="nav-link" href="index.php">Halaman Utama</a>

          </li>
          <?php 

$sql=mysqli_query($con,"SELECT * FROM jenis");
if(isset($_POST['qcari'])){
  $qcari = $_POST['qcari'];
$sql=mysqli_query($con,"SELECT * FROM jenis where id_jenis like 
  '%$qcari%' or  like '%$qcari%'");
}
$nomor = 0;
while ($row= mysqli_fetch_array($sql)){
  $nomor++;

?> 
          <li class="nav-item">

<a class="nav-link" href="jenis_login.php?id_jenis=<?php echo $row ['id_jenis']?>"><?php echo $row ['nama_jenis']?></a>

</li>
<?php } ?>
         <li class="nav-item">

            <a class="nav-link" href="login_v14/index.php">LogIn</a>

          </li>

        </ul>

      </div>

    </div>

  </nav>



  <!-- Page Header -->

  <header class="masthead" style="background-image: url('img/pedesaan.jpg')">

    <div class="overlay"></div>

    <div class="container">

      <div class="row">

        <div class="col-lg-8 col-md-10 mx-auto">

          <div class="site-heading">

            <h1>Berita Terkini</h1>

            <span class="subheading">Membahas Berita Liputan Terkini</span>

          </div>

        </div>

      </div>

    </div>

  </header>



  <!-- Main Content -->

  <div class="container">

    <div class="row">

      <div class="col-lg-8 col-md-10 mx-auto">

      <?php
  $sql=mysqli_query($con,"SELECT * FROM berita INNER JOIN jenis ON berita.id_jenis = jenis.id_jenis WHERE berita.id_jenis = '$id_jenis'");
  
    $nomor = 0;
    while ($row= mysqli_fetch_array($sql)){
      $nomor++;
   ?> 



        <div class="post-preview">

          <a href="detail_login.php?id_berita=<?php echo $row ['id_berita'] ?>">
<img src="img/<?php echo $row ['gambar']?>"></img>
            <h2 class="post-title">

            <?php echo $row ['judul']?>
            </h2>

          </a>

          <p class="post-meta">Posted by

            <a href="#">Desa Dayeuh News</a>

            on <?php echo $row ['tanggal_post']?></p>

        </div>

        <hr>
<?php }  ?> 
       

        <div class="clearfix">

          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>

        </div>

      </div>

    </div>

  </div>



  <hr>



  <!-- Footer -->

  <footer>

    <div class="container">

      <div class="row">

        <div class="col-lg-8 col-md-10 mx-auto">

          <ul class="list-inline text-center">

            <li class="list-inline-item">

              <a href="#">

                <span class="fa-stack fa-lg">

                  <i class="fas fa-circle fa-stack-2x"></i>

                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>

                </span>

              </a>

            </li>

            <li class="list-inline-item">

              <a href="#">

                <span class="fa-stack fa-lg">

                  <i class="fas fa-circle fa-stack-2x"></i>

                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>

                </span>

              </a>

            </li>

            <li class="list-inline-item">

              <a href="#">

                <span class="fa-stack fa-lg">

                  <i class="fas fa-circle fa-stack-2x"></i>

                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>

                </span>

              </a>

            </li>

          </ul>

          <p class="copyright text-muted">Copyright &copy; Your Website 2020</p>

        </div>

      </div>

    </div>

  </footer>



  <!-- Bootstrap core JavaScript -->

  <script src="vendor/jquery/jquery.min.js"></script>

  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



  <!-- Custom scripts for this template -->

  <script src="js/clean-blog.min.js"></script>



</body>



</html>

