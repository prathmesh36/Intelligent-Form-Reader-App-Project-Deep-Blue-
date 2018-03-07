<?php
include 'connect.php';
$sql = "SELECT name FROM formtemp";
$results=$conn->query($sql);
$rows = array();
while($r = mysqli_fetch_assoc($results)) {
    $rows[] = $r;
  }
print json_encode($rows);

?>
