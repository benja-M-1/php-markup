<?php

namespace BenjaM1\Markup;

use Michelf\MarkdownExtra;

class Markdown extends BaseMarkup implements MarkupInterface
{
    /**
     * Render a markuped file to html
     *
     * @param  string $file
     * @return string
     */
    public function render($file)
    {
        return MarkdownExtra::defaultTransform(file_get_contents($file));
    }

    /**
     * Return the supported file extensions
     *
     * @return string The regexp of extensions
     */
    public function getExtensions()
    {
        return '/^(md|mkdn?|mdwn|mdown|markdown)$/';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'markdown';
    }

}
