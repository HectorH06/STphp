<?php $servername="db5012518889.hosting-data.io"; 
$username = "dbu374116"; 
$password = "#EnginE2004"; 
$dbname = "dbs10523684";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) { echo "not connected";
    die("Connection failed: " . mysqli_connect_error()); }
echo "Connected successfully.\n";
mysqli_close($conn);?>