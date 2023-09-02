<?php

use dokuwiki\Extension\RemotePlugin;
use dokuwiki\Remote\AccessDeniedException;

/**
 * DokuWiki Plugin actiontest (Action Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author Andreas Gohr <gohr@cosmocode.de>
 */
class remote_plugin_actiontest extends RemotePlugin
{
    /**
     * Example function
     *
     * All public methods become automatically part of the API
     */
    public function myExample($id)
    {
        // FIXME handle security in your method!
        $id = cleanID($id);
        if (auth_quickaclcheck($id) < AUTH_READ) {
            throw new AccessDeniedException('You are not allowed to read this file', 111);
        }

        return 'example';
    }
}
