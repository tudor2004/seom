<?php

namespace Tudorica\Seom;

/**
 * Class Seom
 * @package Tudorica\Seom
 */
class Seom
{
    /**
     * Create a new Seom instance
     */
    public function __construct()
    {
    }

    /**
     * @return HtmlMeta
     */
    public function meta()
    {
        return app('seom.htmlmeta');
    }

    /**
     * @return OpenGraph
     */
    public function og()
    {
        return app('seom.opengraph');
    }

    /**
     * Generate the html meta content.
     *
     * @return string
     */
    public function generate()
    {
        $content = [];
        $content[] = $this->meta()->generate();
        $content[] = $this->og()->generate();

        return implode(PHP_EOL, $content);
    }
}