<?php

namespace BenjaM1\Markup;

use Symfony\Component\Process\ExecutableFinder;
use Symfony\Component\Process\Process;

class Rest2Html extends BaseMarkup implements MarkupInterface
{
    /**
     * Render a markuped file to html
     *
     * @param  string $file
     * @return string
     */
    public function render($file)
    {
        $finder = new ExecutableFinder();
        $process = new Process(implode(' ', [$finder->find('rst2html.py'), $file]));
        $process->run();

        return $process->getOutput();
    }

    /**
     * Return the supported file extensions
     *
     * @return string The regexp of extensions
     */
    public function getExtensions()
    {
        return '/^(re?st)$/';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rest2html';
    }
}
