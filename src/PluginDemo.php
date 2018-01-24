<?php

namespace CristianRadulescu;

use Composer\Composer;
use Composer\EventDispatcher\Event;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginEvents;
use Composer\Plugin\PluginInterface;
use Symfony\Component\Console\Helper\Table;

class PluginDemo implements PluginInterface, EventSubscriberInterface
{
    /**
     * @var Composer
     */
    protected $composer;

    /**
     * @var IOInterface
     */
    protected $io;

    /**
     * @param Composer $composer
     * @param IOInterface $io
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $this->composer = $composer;
        $this->io = $io;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return array(
            PluginEvents::INIT => 'pluginDemoMethod'
        );
    }

    /**
     * @param Event $event
     */
    public function pluginDemoMethod(Event $event)
    {
        $this->io->write(PHP_EOL.'<options=bold>========= Demo plugin =========</>');
        $this->io->write('<info>Congrats, your plugin works! :)</info>');
        $this->io->write('<options=bold>===============================</>'.PHP_EOL);
    }
}
