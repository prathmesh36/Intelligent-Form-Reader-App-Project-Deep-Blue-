<?php

namespace Google\Cloud\Samples\Auth;
require 'autoload.php';
// Imports the Google Cloud Storage client library.
use Google\Cloud\Vision\VisionClient;


function auth_cloud_implicit($projectId)
{
  $path="cimg/";
  $files = array_diff(scandir($path), array('.', '..','.DS_Store'));
  #print_r($files);
  $serviceAccountPath="GoogleMap-ecaae049a0d1.json";
  $config = [
         'keyFilePath' => $serviceAccountPath,
         'projectId' => $projectId,
     ];
    //echo $config['projectId'];
    # If you don't specify credentials when constructing the client, the
    # client library will look for credentials in the environment.
    $vision = new VisionClient($config);
    $arrf["status"]="";
    $arrf["fnames"]="";
    foreach($files as $imgname)
    {

        $image=$vision->image(file_get_contents("cimg/".$imgname), ['TEXT_DETECTION']);
        $result = $vision->annotate($image);
        $arr = array("status" => "0");
        foreach ((array) $result->text() as $text) {
            //print($text->description());
            $arr["status"]=$text->description();
            break;
        }
         $arrf["status"]=$arrf["status"].$arr["status"]."/";
         $arrf["fnames"]=$arrf["fnames"].$imgname."/";
    }
    echo json_encode($arrf);

}

//echo '{"status":"20\n\/MALE\n\/8452961300\n\/MANDAR MHAPSEKAR\n\/mhapsekarmandor@gmail.om\n\/DHEERAT OARSHAN KOKAN NAGAR\n\/PNDHERI CERST\n\/16-12-1997\n\/","fnames":"259_643.jpg\/345_434.jpg\/435_331.jpg\/472_233.jpg\/473_539.jpg\/511_811.jpg\/514_905.jpg\/615_650.jpg\/"}';
auth_cloud_implicit("theta-terrain-192903");
?>
