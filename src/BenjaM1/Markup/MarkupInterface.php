<?php

namespace BenjaM1\Markup;

/**
 * MarkupInterface
 * 
 * @author Benjamin Grandfond <benjamin.grandfond@gmail.com>
 */
interface MarkupInterface 
{
    /**
     * Render a markuped file to html
     *
     * @param  string $file
     * @return string
     */
    public function render($file);

    /**
     * Check whether the markup support the file format.
     *
     * @param $file
     * @return boolean
     */
    public function support($file);

    /**
     * Return the supported file extensions
     *
     * @return string The regexp of extensions
     */
    public function getExtensions();

    /**
     * @return string
     */
    public function getName();
}
 