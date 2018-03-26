<?php
namespace Google\Cloud\Samples\Vision;
require 'autoload.php';
use Google\Cloud\Vision\VisionClient;

$projectId = 'theta-terrain-192903';
$path = 'test.jpeg';

function detect_face($projectId, $path)
{
    $config = [
        'projectId' => $projectId,
    ];  
    $vision = new VisionClient($config);
    $image = $vision->image(file_get_contents($path), ['FACE_DETECTION']);
    $result = $vision->annotate($image);
    print("Faces:\n");
    foreach ((array) $result->faces() as $face) {
        printf("Anger: %s\n", $face->isAngry() ? 'yes' : 'no');
        printf("Joy: %s\n", $face->isJoyful() ? 'yes' : 'no');
        printf("Surprise: %s\n\n", $face->isSurprised() ? 'yes' : 'no');
    }
    return $result;
}
detect_face($projectId,$path);
?>
