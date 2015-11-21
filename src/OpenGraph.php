<?php namespace Tudorica\Seom;

use Tudorica\Seom\Contracts\OpenGraph as OpenGraphContract;

/**
 * Class OpenGraph
 * @package Tudorica\Seom
 */
class OpenGraph implements OpenGraphContract
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $locale;

    /**
     * @param string $title
     * @return OpenGraph
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param string $image
     * @return OpenGraph
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @param string $description
     * @return OpenGraph
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param string $locale
     * @return OpenGraph
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Generate the OpenGraph meta tags
     *
     * @return string
     */
    public function generate()
    {
        $content = [];

        if($this->getTitle())
        {
            $content[] = '<meta property="og:title" content="' . $this->getTitle() . '"/>';
        }

        if($this->getImage())
        {
            $content[] = '<meta property="og:image" content="'. $this->getImage() . '"/>';
        }

        if($this->getDescription())
        {
            $content[] = '<meta property="og:description" content="' . $this->getDescription() . '"/>';
        }

        if($this->getLocale())
        {
            $content[] = '<meta property="og:locale" content="' . $this->getLocale() . '"/>';
        }

        return implode(PHP_EOL, $content);
    }
}