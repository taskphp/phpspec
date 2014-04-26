<?php

namespace spec\Task\Plugin\PhpSpec\Console;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use PhpSpec\Console\Application;
use Symfony\Component\Console\Application as SymfonyApplication;
use Symfony\Component\Console\Command\Command;

class CommandRunnerSpec extends ObjectBehavior
{
    function let()
    {
        $app = new Application('2');
        $this->beConstructedWith($app, "run");
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Task\Plugin\PhpSpec\Console\CommandRunner');
    }

    function it_should_return_instanceof_run()
    {
        $app = new Application('2');
        $this->findCommand($app, 'run')->shouldHaveType('PhpSpec\Console\Command\RunCommand');
    }

    function it_should_throw_invalid_argument_exception()
    {
        $app = new SymfonyApplication();
        $this->shouldThrow('InvalidArgumentException')->during('findCommand', [$app, 'wow']);
    }

    function it_should_throw_runtime_exception()
    {
        $app = new Application('2');
        $this->shouldThrow('RuntimeException')->during('findCommand', [$app, 'wow']);
    }

    function it_should_return_fully_qualified_class_name()
    {
        $this->getCommandClassName('run')->shouldReturn('PhpSpec\Console\Command\RunCommand');
    }
}
