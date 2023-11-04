<?php

namespace CristianRadulescu;

use Composer\Composer;
use Composer\EventDispatcher\Event;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginEvents;
use Composer\Plugin\PluginInterface;

class PluginDemo implements PluginInterface, EventSubscriberInterface
{
    protected Composer $composer;

    protected IOInterface $io;

    public function activate(Composer $composer, IOInterface $io): void
    {
        $this->composer = $composer;
        $this->io = $io;
    }

    public static function getSubscribedEvents(): array
    {
        return [ PluginEvents::INIT => [ 'pluginDemoMethod', 0 ] ];
    }

    public function pluginDemoMethod(Event $event): void
    {
        $this->io->write(PHP_EOL.'<options=bold>========= Demo plugin =========</>');
        $this->io->write('<info>Congrats, your plugin works! :)</info>');
        $this->io->write('<options=bold>===============================</>'.PHP_EOL);
    }

    public function deactivate(Composer $composer, IOInterface $io): void
    {
    }

    public function uninstall(Composer $composer, IOInterface $io): void
    {
    }
}
