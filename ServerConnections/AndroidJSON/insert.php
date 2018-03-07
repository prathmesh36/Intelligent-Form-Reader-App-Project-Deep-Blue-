<?php
include 'connect.php';
$name=$_GET["name"];
$formname=$_GET["formname"];
$sql = "SELECT detail FROM formtemp WHERE name='".$name."'";
$results=$conn->query($sql);
$rows=array();
$getvals=array();
$r = mysqli_fetch_assoc($results);
$rows=explode("~",$r["detail"]);
$sql = "INSERT INTO ".$name." (formname,";
//print_r($rows);
for($i=0;$i<sizeof($rows)-2;$i++)
{
  $row=$rows[$i];
  $fieldname=explode(",",$row);
  $sql=$sql." ".$fieldname[0].",";
  $getvals[$i]=$_GET[$fieldname[0]];
}
$row=$rows[sizeof($rows)-2];
$fieldname=explode(",",$row);
$sql=$sql." ".$fieldname[0];
$getvals[sizeof($rows)-2]=$_GET[$fieldname[0]];

$sql=$sql.") VALUES('".$formname."',";
for($i=0;$i<sizeof($getvals)-1;$i++)
{
  $getval=$getvals[$i];
  $sql=$sql."'".$getval."',";
}
$getval=$getvals[sizeof($getvals)-1];
$sql=$sql."'".$getval."'";
$sql=$sql.")";
//echo $sql;
$arr = array("status" => "0");
if(mysqli_query($conn,$sql))
{
  $arr["status"]=1;
  echo json_encode($arr);
}else {
  echo json_encode($arr);
  echo mysqli_error($conn);
}

?>
