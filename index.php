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
            /* Specify the server and connection string attributes. */
            $serverName = 'bagasap90.database.windows.net';
            /* Get UID and PWD from application-specific files.  */
            $uid = 'bagaswtf';
            $pwd = 'Bagasadi90--';
            $connectionInfo = array( "UID"=>$uid,
                                     "PWD"=>$pwd,
                                     "Database"=>"belajarphp");
             
            /* Connect using SQL Server Authentication. */
            $conn = sqlsrv_connect( $serverName, $connectionInfo);
               if( $conn === false )
                {
                    echo "Could not connect.\n";
                    die( print_r( sqlsrv_errors(), true));
                }
                else {
                    echo "koneksi berhasil..!";
                    echo "Data Tabel Pemakai :";
                
                   
                    $tsql = "select * from [pemakai]";
                    $result = sqlsrv_query($conn, $tsql);
                   
                    while($row = sqlsrv_fetch_array($result))
                    {
                    echo"<hr><p></p><table border=1 cellpadding=4 cellspacing=0>
                  <tr bgcolor='#ccc'><td>Id</td><td>Nama</td><td>Email</td></tr>";
                  echo"<tr><td>$row[id]</td><td>$row[nama]</td><td>$row[email]</td></tr>";
                
                    }
              
                sqlsrv_close( $conn);       
                }
             

            ?>
            <?php
            
            $con = mssql_connect($server, $username, $password);
            if ($con) 
            {
                echo 'Berhasil konek!';
            }
            else
            {
                echo 'Koneksi GAGAL!';
            }
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
