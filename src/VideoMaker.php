<?php

namespace AdrianGus\VideoMaker;

use Exception;
use AdrianGus\VideoMaker\Entity;
use AdrianGus\VideoMaker\Profile;
use AdrianGus\VideoMaker\Factory;

/**
 * Classe principal da integração com os serviços da Braspag
 *
 * @author Adrian Gusberti <adrian.gusberti@moovin.com.br>
 *
 * @package Moovin\Payment\Braspag
 */
class VideoMaker
{
    /** @var Factory\VideoFactory */
    private $videoFactory;

    public function __construct(Profile\Profile $profile)
    {
        $this->videoFactory = new Factory\VideoFactory($profile);
    }

    /**
     * Cria um pagamento pagamento na Braspag.
     *
     * @param Integration\Entity\Order $order
     *
     * @throws Exception
     */
    public function createVideo(Entity\Video $video)
    {
        ~r($video);
        $this->videoFactory->create();
    }
}