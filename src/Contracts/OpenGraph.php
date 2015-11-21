<?php namespace Tudorica\Seom\Contracts;

/**
 * Interface OpenGraph
 * @package Tudorica\Seom\Contracts
 */
interface OpenGraph
{
    /**
     * @param string $title
     * @return OpenGraph
     */
    public function setTitle($title);

    /**
     * @param string $image
     * @return OpenGraph
     */
    public function setImage($image);

    /**
     * @param string $description
     * @return OpenGraph
     */
    public function setDescription($description);

    /**
     * @param string $locale
     * @return Opengraph
     */
    public function setLocale($locale);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string
     */
    public function getImage();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return string
     */
    public function getLocale();

    /**
     * Generate the OpenGraph meta tags
     *
     * @return string
     */
    public function generate();
}