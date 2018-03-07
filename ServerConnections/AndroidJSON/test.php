<?php
include 'connect.php';
$name=$_GET["name"];
$det=$_GET["det"];

$sql = "INSERT INTO formtemp
VALUES ('','".$name."','1','".$det."')";
$arr = array("status" => "0");

$sqlc = "CREATE TABLE ".$name." (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, formname VARCHAR(30) NOT NULL,";

$cols=(explode("~",$det));

for($i=0;$i<sizeof($cols)-2;$i++)
{
  $colname=explode(",",$cols[$i]);
  $sqlc=$sqlc." ".$colname[0]." VARCHAR(30) NOT NULL,";
}
$colname=explode(",",$cols[sizeof($cols)-2]);
$sqlc=$sqlc." ".$colname[0]." VARCHAR(30) NOT NULL)";
if ($conn->query($sql) === TRUE && $conn->query($sqlc) === TRUE) {
      $arr["status"]=1;
    echo json_encode($arr);
} else {
    echo json_encode($arr);
    echo mysqli_error($conn);
}

$conn->close();
?>
