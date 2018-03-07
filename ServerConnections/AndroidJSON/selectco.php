<?php
include 'connect.php';
$name=$_GET["name"];
$sql = "SELECT detail FROM formtemp WHERE name='".$name."'";
$results=$conn->query($sql);
$rows = array();
$r = mysqli_fetch_assoc($results);
print json_encode($r);

?>
