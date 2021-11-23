<?php

namespace AdrianGus\VideoMaker\Profile;

class Profile
{
    /** @var string Key ID in Shotstack */
    private $keyId;

    /** @var string Api Key in Shotstack */
    private $apiKey;

    /** @var int Environment of development */
    private $environment;

    /**
     * Define a propriedade {@see Profile::$keyId}.
     *
     * @param string $keyId
     *
     * @return Profile
    */
    public function setKeyId(string $keyId): Profile
    {
        $this->keyId = $keyId;
        return $this;
    }

    /**
     * Retorna a propriedade {@see Profile::$keyId}.
     *
     * @return string
    */
    public function getKeyId(): string
    {
        return $this->keyId;
    }

    /**
     * Define a propriedade {@see Profile::$apiKey}.
     *
     * @param string $apiKey
     *
     * @return Profile
    */
    public function setApiKey(string $apiKey): Profile
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * Retorna a propriedade {@see Profile::$apiKey}.
     *
     * @return string
    */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * Define a propriedade {@see Profile::$environment}.
     *
     * @param int $environment
     *
     * @return Profile
    */
    public function setEnvironment(int $environment): Profile
    {
        $this->environment = $environment;
        return $this;
    }

    /**
     * Retorna a propriedade {@see Profile::$environment}.
     *
     * @return string
    */
    public function getEnvironment(): string
    {
        return $this->environment;
    }
}
