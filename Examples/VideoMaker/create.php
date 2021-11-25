<?php

include_once __DIR__ . '/../../vendor/autoload.php';

$profile =  new \AdrianGus\VideoMaker\Profile\Profile();

$profile->setApiKey("y18O9tAXLN8ReBa7H0mva3OWOBKHxDOJ2gmDaLr5");
$profile->setEnvironment(0);

$videoMaker = new \AdrianGus\VideoMaker\VideoMaker(
    $profile
);

$video = new \AdrianGus\VideoMaker\Entity\Video();

$video->setTitle("adrian");
$video->setTemplate(2);

$response = $videoMaker->createVideo($video);
~r($response);