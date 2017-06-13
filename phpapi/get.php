<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "aralidb";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
   die('Could not connect: ' . mysqli_connect_error());
}

$sql = "SELECT name,age FROM tblUsers";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
   $rows = array();
   while ($r = mysqli_fetch_assoc($result))
   {
      $rows[] = $r;
   }
   echo json_encode($rows);
}
else{
echo "0 results";
}

mysqli_close($conn);

?>