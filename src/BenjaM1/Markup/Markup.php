<?php

namespace BenjaM1\Markup;

class Markup
{
    private $markups = [];

    /**
     * @param MarkupInterface $markup Markup to register
     */
    public function addMarkup(MarkupInterface $markup)
    {
        $this->markups[$markup->getName()] = $markup;
    }

    /**
     * @param $file
     * @return string
     */
    public function render($file)
    {
        return $this->findMarkup($file)->render($file);
    }

    /**
     * @param  string $file
     * @return MarkupInterface
     * @throws MarkupNotFoundException
     */
    private function findMarkup($file)
    {
        foreach ($this->markups as $markup) {
            if ($markup->support($file)) {
                return $markup;
            }
        }

        throw new MarkupNotFoundException(sprintf('There is no registered markup that can render the file "%s".', $file));
    }
}
