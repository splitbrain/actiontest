<?php

use dokuwiki\Extension\ActionPlugin;
use dokuwiki\Extension\EventHandler;
use dokuwiki\Extension\Event;

/**
 * DokuWiki Plugin actiontest (Action Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author Andreas Gohr <gohr@cosmocode.de>
 */
class action_plugin_actiontest extends ActionPlugin
{
    /** @inheritDoc */
    public function register(EventHandler $controller)
    {
        $controller->register_hook('EXAMPLE_EVENT', 'AFTER|BEFORE', $this, 'handleExampleEvent');
    }


    /**
     * Event handler for EXAMPLE_EVENT
     *
     * @see https://www.dokuwiki.org/devel:events:EXAMPLE_EVENT
     * @param Event $event Event object
     * @param mixed $param optional parameter passed when event was registered
     * @return void
     */
    public function handleExampleEvent(Event $event, $param)
    {
    }
}
