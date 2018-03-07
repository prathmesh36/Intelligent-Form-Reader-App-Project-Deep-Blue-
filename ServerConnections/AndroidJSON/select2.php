<?php
include 'connect.php';
$name=$_GET["name"];
$sql = "SELECT formname FROM ".$name;
$results=$conn->query($sql);
$rows = array();

while($r = mysqli_fetch_assoc($results)) {
    $rows[] = $r;
  }
print json_encode($rows);

?>
