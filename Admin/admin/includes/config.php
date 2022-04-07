 <?php
//    $servername = "localhost";
//    $username ="root";
//    $password ="";
//    $database ="giasu";
//    $conn = new mysqli($servername, $username, $password, $database);

// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);

$servername = "localhost";
$username = "root";
$password = "";
$database ="demo";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

  

