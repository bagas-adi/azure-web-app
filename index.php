<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Azure App Service - Sample Static HTML Site</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="navbar-wrapper">
      <div class="container">
          <h1>Azure App Service - Sample Static HTML Site</h1>
          <hr/>
          <h4>
            <?php 
            // PHP Data Objects(PDO) Sample Code:
            // try {
            //     $conn = new PDO("sqlsrv:server = tcp:bagasap90.database.windows.net,1433; Database = bagasap90-db", "bagaswtf", "Bagasadi90--");
            //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // }
            // catch (PDOException $e) {
            //     print("Error connecting to SQL Server.");
            //     die(print_r($e));
            // };
            // $host = "bagasap90.database.windows.net";
            // $user = "bagaswtf";
            // $pass = "Bagasadi90--";
            // $db = "bagasap90-db";
            // try {
            //     $conn = new PDO("sqlsrv:server = $host; Database = $db", $user, $pass);
            //     $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            // } catch(Exception $e) {
            //     echo "Failed: " . $e;
            // }
            // // SQL Server Extension Sample Code:
            $connectionInfo = array("Uid" => "bagaswtf@bagasap90", "PWD" => "Bagasadi90--", "Database" => "bagasap90-db");
            //, "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0
            $serverName = "bagasap90.database.windows.net";
            $conn = sqlsrv_connect($serverName, $connectionInfo);
            if ($conn) {
              echo "Berhasil konek";
            } else {
              echo "Gagal konek";
            };
            ?>
          </h4>
      </div>
    </div>

    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container">
        
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <img class="img-rectangle" src="img/azure-portal.png" alt="Azure App Service Web Apps" height="140">
          <h2>Azure App Service Web Apps</h2>
          <p>App Service Web Apps is a fully managed compute platform that is optimized for hosting websites and web applications. This platform-as-a-service (PaaS) offering of Microsoft Azure lets you focus on your business logic while Azure takes care of the infrastructure to run and scale your apps.</p>
        </div>
          <div class="col-xs-12 col-sm-6">
              <img class="img-rectangle" src="img/cdn.png" alt="CDN" height="140">
              <h2>Azure Content Delivery Network (CDN)</h2>
              <p>The Azure Content Delivery Network (CDN) caches static web content at strategically placed locations to provide maximum throughput for delivering content to users. The CDN offers developers a global solution for delivering high-bandwidth content by caching the content at physical nodes across the world.</p>
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
