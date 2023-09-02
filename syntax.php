<?php

use dokuwiki\Extension\SyntaxPlugin;

/**
 * DokuWiki Plugin actiontest (Syntax Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author Andreas Gohr <gohr@cosmocode.de>
 */
class syntax_plugin_actiontest extends SyntaxPlugin
{
    /** @inheritDoc */
    public function getType()
    {
        return 'FIXME: container|baseonly|formatting|substition|protected|disabled|paragraphs';
    }

    /** @inheritDoc */
    public function getPType()
    {
        return 'FIXME: normal|block|stack';
    }

    /** @inheritDoc */
    public function getSort()
    {
        return FIXME;
    }

    /** @inheritDoc */
    public function connectTo($mode)
    {
        $this->Lexer->addSpecialPattern('<FIXME>', $mode, 'plugin_actiontest');
//        $this->Lexer->addEntryPattern('<FIXME>', $mode, 'plugin_actiontest');
    }

//    /** @inheritDoc */
//    public function postConnect()
//    {
//        $this->Lexer->addExitPattern('</FIXME>', 'plugin_actiontest');
//    }

    /** @inheritDoc */
    public function handle($match, $state, $pos, Doku_Handler $handler)
    {
        $data = [];

        return $data;
    }

    /** @inheritDoc */
    public function render($mode, Doku_Renderer $renderer, $data)
    {
        if ($mode !== 'xhtml') {
            return false;
        }

        return true;
    }
}
