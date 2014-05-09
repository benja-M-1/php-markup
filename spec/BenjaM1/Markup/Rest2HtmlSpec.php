<?php

namespace spec\BenjaM1\Markup;

use PhpSpec\ObjectBehavior;

class Rest2HtmlSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenjaM1\Markup\Rest2Html');
        $this->shouldHaveType('BenjaM1\Markup\MarkupInterface');
    }

    function it_has_name()
    {
        $this->getName()->shouldBe('rest2html');
    }

    function it_should_support_rst_files()
    {
        $this->support('foo/bar.rst')->shouldBe(true);
        $this->support('foo/bar.rest')->shouldBe(true);
    }

    function it_should_render_a_rst_files()
    {
        $this->render(__DIR__.'/fixtures/foo.rst')->shouldMatch("#<h1.*>Hello<\/h1>#");
    }
}
