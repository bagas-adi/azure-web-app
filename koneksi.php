<?php 
function connectDB(){
  $connectionInfo = array("Database" => "bagasap90-db","UID" => "bagaswtf@bagasap90", "PWD" => "Bagasadi90--", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
  $serverName = "tcp:bagasap90.database.windows.net,1433";
  try{
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    if( $conn === false ) {
         // die( print_r( sqlsrv_errors(), true));
         return false;
    } else {
      return $conn;
    };
  } catch (Exception $e){
    // echo "Failed: " . $e;
    return $conn;
  };
};
function insertDB($conn,$nama,$email,$job){
  $tsql= "INSERT INTO [dbo].[Register] (Nama,Email,Job) VALUES ($nama,$email, $job)";
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
      // echo ("Reading data from table" . PHP_EOL);
      while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
         echo ($row['ID'] . " " . $row['Nama'] . PHP_EOL);
      };
    };
    sqlsrv_free_stmt($getResults);
  };
// $connectionInfo = array("Database" => "bagasap90-db","UID" => "bagaswtf@bagasap90", "PWD" => "Bagasadi90--", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
// $serverName = "tcp:bagasap90.database.windows.net,1433";
// try{
//   $conn = sqlsrv_connect($serverName, $connectionInfo);
//   if( $conn === false ) {
//        die( print_r( sqlsrv_errors(), true));
//   } else {
//     $tsql= "SELECT * FROM [dbo].[User]";
//     $getResults= sqlsrv_query($conn, $tsql) or die("Error ".sqlsrv_errors());
//     if( $getResults === false ) {
//        die( print_r( sqlsrv_errors(), true));
//     } else {
//       // echo ("Reading data from table" . PHP_EOL);
//       while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
//          echo ($row['ID'] . " " . $row['Nama'] . PHP_EOL);
//       };
//       sqlsrv_free_stmt($getResults);
//     }
//   } 
// } catch (Exception $e){
//   echo "Failed: " . $e;
// };
?>