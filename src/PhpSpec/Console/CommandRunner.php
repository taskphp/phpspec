<?php

namespace Task\Plugin\PhpSpec\Console;

use Task\Plugin\Console\CommandRunner as BaseCommandRunner;
use Symfony\Component\Console\Application;

class CommandRunner extends BaseCommandRunner
{
    public function findCommand(Application $app, $commandName)
    {
        if ( ! $app instanceof \PhpSpec\Console\Application) {
            throw new \InvalidArgumentException('$app should be an instance of \PhpSpec\Console\Application');
        }

        $commandClass = $this->getCommandClassName($commandName);

        if ( ! class_exists($commandClass)) {
            throw new \RuntimeException("Class {$commandClass} does not exist");
        }

        return new $commandClass;
    }

    public function getCommandClassName($commandName)
    {
        return 'PhpSpec\Console\Command\\'.ucfirst($commandName).'Command';
    }
}
