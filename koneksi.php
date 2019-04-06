<?php 
function connectDB(){
  $connectionInfo = array("Database" => "bagasap90-db","UID" => "bagaswtf@bagasap90", "PWD" => "Bagasadi90--", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
  $serverName = "tcp:bagasap90.database.windows.net,1433";
  return sqlsrv_connect($serverName, $connectionInfo); 
};
function insertDB($conn,$nama,$email,$job){
  $tsql= "INSERT INTO [dbo].[Register] (Nama,Email,Job) VALUES ('".$nama."','".$email."', '".$job."')";
    $getResults= sqlsrv_query($conn, $tsql) or die("Error ".sqlsrv_errors());
    if( $getResults === false ) {
       die( print_r( sqlsrv_errors(), true));
    };
    sqlsrv_free_stmt($getResults);
};
function showData($conn){
  $tsql= "SELECT * FROM [dbo].[Register]";
    $getResults= sqlsrv_query($conn, $tsql) or die("Error ".sqlsrv_errors());
    if( $getResults === false ) {
       die( print_r( sqlsrv_errors(), true));
    } else {
      echo ("<table>");
      echo ("<tr><th>ID</th><th>Nama</th><th>Email</th><th>Job</th></tr>");
      while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
         echo ("<tr><td>".$row['ID'] . "</td><td>" . $row['Nama'] . "</td><td>" .$row['Email']. "</td><td>".$row['Job']."</td></tr>");
      };
      echo ("</table>");
    };
    sqlsrv_free_stmt($getResults);
  };
?>