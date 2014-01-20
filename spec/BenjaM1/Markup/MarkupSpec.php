<?php

namespace spec\BenjaM1\Markup;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use BenjaM1\Markup\MarkupInterface;

class MarkupSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('BenjaM1\Markup\Markup');
    }

    function it_should_render_markuped_text(MarkupInterface $markup)
    {
        $html = "foo";
        $markup->getName()->willReturn('foo');
        $markup->support(Argument::type('string'))->shouldBeCalled()->willReturn(true);
        $markup->render(Argument::type('string'))->shouldBeCalled()->willReturn($html);

        $this->addMarkup($markup);
        $this->render('foo.md')->shouldReturn($html);
    }

    function it_should_not_found_markup()
    {
        $this->shouldThrow('BenjaM1\Markup\MarkupNotFoundException')->during('render', ['foo.md']);
    }
}
