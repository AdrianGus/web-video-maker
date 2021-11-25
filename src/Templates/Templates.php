<?php

namespace AdrianGus\VideoMaker\Templates;

use AdrianGus\VideoMaker\Factory;

/**
 * class responsible for setting the chosen video template
 *
 * @author Adrian Gusberti <adrian.m.gusberti@gmail.com>
*/
class Templates
{
    /** @var Factory\VideoFactory video that will be rendered */
    private $video;

    /**
     * @param Factory\VideoFactory $profile
     */
    public function __construct(Factory\VideoFactory $video)
    {
        $this->video = $video;
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
}
