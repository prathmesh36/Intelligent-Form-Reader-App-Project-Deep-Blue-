<?php


$files = glob('GVision/vendor/cimg/*');
foreach($files as $file){ // iterate files
  if(is_file($file))
    unlink($file); // delete file
}


$command = shell_exec("/Users/prathmeshmhapsekar/anaconda/bin/python /Applications/XAMPP/xamppfiles/htdocs/AndroidUpload/uploads/crop_image.py");
$output = shell_exec($command);

//echo $output;
//echo $command;

/*
  $arr = array("status" => "0");
  $arr["status"]="8";
  echo json_encode($arr);

*/
if(trim($command)=="success")
{
  $files = glob('GVision/vendor/cimg/*');
  $arr["status"]=strval(sizeof($files));
  echo json_encode($arr);
}else {
    echo json_encode($arr);
}


?>
