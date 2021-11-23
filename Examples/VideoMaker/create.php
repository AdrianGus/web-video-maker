<?php

include_once __DIR__ . '/../../vendor/autoload.php';

$profile =  new \AdrianGus\VideoMaker\Profile\Profile();
$profile->setKeyId("beeace27-d6eb-454f-a126-5fe8f04f1b28");
$profile->setApiKey("PMAGYFTMZYBTCWNAWGEDIHDROUHVPSZIYCTURURB");
$profile->setEnvironment(0);

print_r($profile);