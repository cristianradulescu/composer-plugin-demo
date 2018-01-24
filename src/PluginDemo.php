<?php

namespace CristianRadulescu;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Script\Event;

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

    public function activate(Composer $composer, IOInterface $io)
    {
        $this->composer = $composer;
        $this->io = $io;
    }

    public static function getSubscribedEvents()
    {
        return array(
            'post-status-cmd' => 'pluginDemoMethod'
        );
    }

    public function pluginDemoMethod(Event $event)
    {
        $this->io->writeError('Relax, this is not an actual error! :)');
    }
}
