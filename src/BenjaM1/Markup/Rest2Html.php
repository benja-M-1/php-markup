<?php

namespace BenjaM1\Markup;

use Symfony\Component\Process\ExecutableFinder;
use Symfony\Component\Process\Process;

class Rest2Html implements MarkupInterface
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
     * Check whether the markup support the file format.
     *
     * @param $file
     * @return boolean
     */
    public function support($file)
    {
        $extension = pathinfo($file, PATHINFO_EXTENSION);

        return (int) preg_match($this->getExtensions(), $extension) > 0;
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
