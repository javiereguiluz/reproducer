<?php

namespace App\EventListener;

use Symfony\Component\Console\Event\ConsoleCommandEvent;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;

final class CommandListener
{
    #[AsEventListener(event: 'console.command')]
    public function onConsoleCommand(ConsoleCommandEvent $event): void
    {
        echo "\033[30;44m[DEBUG]\033[0m Symfony command being run: ".$event->getCommand()?->getName().PHP_EOL;
    }
}
