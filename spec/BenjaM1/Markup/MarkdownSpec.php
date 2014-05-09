<?php

namespace spec\BenjaM1\Markup;

use PhpSpec\ObjectBehavior;

class MarkdownSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenjaM1\Markup\Markdown');
        $this->shouldHaveType('BenjaM1\Markup\MarkupInterface');
    }

    function it_should_support_file()
    {
        $this->support('foo.md')->shouldReturn(true);
        $this->support('foo.mkd')->shouldReturn(true);
        $this->support('foo.mkdn')->shouldReturn(true);
        $this->support('foo.mdwn')->shouldReturn(true);
        $this->support('foo.mdown')->shouldReturn(true);
        $this->support('foo.markdown')->shouldReturn(true);
    }

    function it_should_render_html()
    {
        $this->render(__DIR__.'/fixtures/foo.md')->shouldReturn("<h1>Hello</h1>\n");
    }
}
