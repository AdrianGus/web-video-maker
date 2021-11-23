<?php

namespace AdrianGus\VideoMaker\Outsource;

use AdrianGus\VideoMaker\Profile;

/**
 * Outsource constructor for the package
 *
 * @author Adrian Gusberti <adrian.m.gusberti@gmail.com>
 */
class Factory
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
}
