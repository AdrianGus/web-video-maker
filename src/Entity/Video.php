<?php

namespace AdrianGus\VideoMaker\Entity;

/**
 * Entity of a video with the information set by the customer
 *
 * @author Adrian Gusberti <adrian.m.gusberti@gmail.com>
 */
class Video
{
    /** @var string Video title */
    private $title;

    /** @var string Template chosen by the customer */
    private $template;

    /**
     * Retorna a propriedade {@see Video::$title}.
     *
     * @return string
    */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Define a propriedade {@see Video::$title}.
     *
     * @param string $title
     *
     * @return Video
    */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Retorna a propriedade {@see Video::$template}.
     *
     * @return string
    */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Define a propriedade {@see Video::$template}.
     *
     * @param string $template
     *
     * @return Video
    */
    public function setTemplate($template)
    {
        $this->template = $template;
        return $this;
    }
}
