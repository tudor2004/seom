<?php namespace Tudorica\Seom;

use Tudorica\Seom\Contracts\HtmlMeta as HtmlMetaContract;

/**
 * Class HtmlMeta
 * @package Tudorica\Seom
 */
class HtmlMeta implements HtmlMetaContract
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var array
     */
    private $metas = [];

    /**
     * @param string $title
     * @return HtmlMeta
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param string $description
     * @return HtmlMeta
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param string $keywords
     * @return HtmlMeta
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * @param string $name
     * @param string $value
     * @return HtmlMeta
     */
    public function addMeta($name, $value = null)
    {
        $this->metas[$name] = $value;

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
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * @return array
     */
    public function getMetas()
    {
        return $this->metas;
    }

    /**
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Generate the html content.
     *
     * @return string
     */
    public function generate()
    {
        $content = [];

        if($this->getTitle())
        {
            $content[] = '<title>' . $this->getTitle() . '</title>';
        }

        if($this->getDescription())
        {
            $content[] = '<meta name="description" content="' . $this->getDescription() . '">';
        }

        if($this->getKeywords())
        {
            $content[] = '<meta name="keywords" content="' . $this->keywords . '">';
        }

        if($this->getMetas() && count($this->getMetas()))
        {
            foreach($this->getMetas() as $name => $value)
            {
                $content[] = '<meta name="' . $name . '" content="' . $value . '">';
            }
        }

        return implode(PHP_EOL, $content);
    }
}