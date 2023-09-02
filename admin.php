<?php
/**
 * DokuWiki Plugin actiontest (Admin Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Andreas Gohr <gohr@cosmocode.de>
 */
class admin_plugin_actiontest extends \dokuwiki\Extension\AdminPlugin
{

    /** @inheritDoc */
    public function handle()
    {
        // FIXME data processing
    }

    /** @inheritDoc */
    public function html()
    {
        // FIXME render output
        echo '<h1>' . $this->getLang('menu') . '</h1>';
    }
}

