<?php

namespace BenjaM1\Markup;

use Symfony\Component\Process\ExecutableFinder;
use Symfony\Component\Process\Process;

abstract class BaseMarkup implements MarkupInterface
{
    /**
     * {@inheritdoc}
     */
    public function support($file)
    {
        $extension = pathinfo($file, PATHINFO_EXTENSION);

        return (int) preg_match($this->getExtensions(), $extension) > 0;
    }
}
