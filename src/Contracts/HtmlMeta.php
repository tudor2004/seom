<?php namespace Tudorica\Seom\Contracts;

/**
 * Interface HtmlMeta
 * @package Tudorica\Seom\Contracts
 */
interface HtmlMeta
{
    /**
     * @param string $title
     * @return HtmlMeta
     */
    public function setTitle($title);

    /**
     * @param string $description
     * @return HtmlMeta
     */
    public function setDescription($description);

    /**
     * @param string $keywords
     * @return HtmlMeta
     */
    public function setKeywords($keywords);

    /**
     * @param string $name
     * @param string $value
     * @return HtmlMeta
     */
    public function addMeta($name, $value = null);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return string
     */
    public function getKeywords();

    /**
     * @return array
     */
    public function getMetas();

    /**
     * @return string
     */
    public function generate();
}