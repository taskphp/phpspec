<?php

namespace spec\Task\Plugin;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PhpSpecPluginSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Task\Plugin\PhpSpecPlugin');
    }

    function it_should_wrap_a_phpspec_console_application()
    {
        $this->getApplication()->shouldHaveType('PhpSpec\Console\Application');
    }
}
