<?php

namespace AdrianGus\VideoMaker\Factory;

use AdrianGus\VideoMaker\Profile;
use Shotstack\Client\Configuration;
use Shotstack\Client\Api\EditApi;
use Shotstack\Client\Model\Edit;
use Shotstack\Client\Model\Output;

/**
 * class responsible for creating and manipulating videos
 *
 * @author Adrian Gusberti <adrian.m.gusberti@gmail.com>
*/
class VideoFactory
{
    /** @var Profile\Profile Profile Configurations */
    private $profile;

    /**
     * @param Profile\Profile $profile
     */
    public function __construct(Profile\Profile $profile)
    {
        $this->profile = $profile;
    }
    
    /**
     * Create Video
    */
    public function create()
    {
        try {

        } catch (\Exception $exception) {

        }
    }

    /**
     * Edit Video
    */
    public function edit()
    {
        try {

        } catch (\Exception $exception) {

        }
    }
}
