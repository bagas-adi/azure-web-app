
<?php   
  include 'koneksi.php';
  $conn = connectDB();
  if($conn === false){
    //------------------------------------------------------------------ Koneksi ke Database gagal
    die( print_r( sqlsrv_errors(), true));
  } else { 
    // showData($conn);
    // insertDB($conn,"Bagas Adi","bagasap90@mail.com.id","Software developers");
    if(isset($_POST['submit'])){
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $job = $_POST['job'];
      insertDB($conn,$nama,$email,$job);
    }
    //------------------------------------------------------------------ Koneksi ke Database berhasil
    ?>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Azure Web App - Bagasap90</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
      </head>

      <body>
        <div class="navbar-wrapper">
          <div class="container">
              <h1>Selamat Datang peserta Microsoft Azure Developer!</h1>
              <h4>Silahkan isi data diri Anda</h4>
              <hr/> 
          </div>
        </div>

        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container">
            
          <div class="row">
            <div class="col-xs-12 col-sm-6"> 
              <h2>Registration Form</h2>
              <form  action="index.php" method="post">
                 <div class="form-group">
                  <label for="usr">Name:</label>
                  <input name="nama" type="text" class="form-control" >
                </div>
                 <div class="form-group">
                  <label for="email">Email:</label>
                  <input name="email" type="text" class="form-control" >
                </div>
                 <div class="form-group">
                  <label for="job">Pekerjaan:</label>
                  <input name="job" type="text" class="form-control" >
                </div> 
              <!--   <input type="text" name="nama" placeholder="Nama">
                <input type="text" name="email" placeholder="Email Address">
                <input type="text" name="job" placeholder="Pekerjaan"> -->

              <div class="form-group">
                  <input class="btn btn-default" type="submit" name="submit">
              </div>
              </form>
            </div>
              <div class="col-xs-12 col-sm-6">
                  <img class="img-rectangle" src="img/cdn.png" alt="CDN" height="140">
                  <h2>Peserta yang telah mendaftar</h2>
                  <?php 
                  showData($conn);
                  ?>
              </div>
          </div>
        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
      </body>
    </html>

    <?php
  }
?>

