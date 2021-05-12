<?php

namespace PrinsFrank\HTMLDOM;

use PrinsFrank\HTMLDOM\DOM\DOM;
use PrinsFrank\HTMLDOM\Parser\Context\ContextParser;
use PrinsFrank\HTMLDOM\Parser\State;

class HTMLDOMParser
{
    public static function parse(string $string): DOM
    {
        $DOM   = new DOM();
        $state = new State($DOM);
        foreach (mb_str_split($string . ' ') as $char) {
            ContextParser::handle($state, $char);
            echo  'Character: "' . $char .'", Now in context "' . $state->context . '" with buffer "' . $state->buffer . '"' . PHP_EOL;
        }

        return $DOM;
    }
}
