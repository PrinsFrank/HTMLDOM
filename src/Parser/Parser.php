<?php

namespace PrinsFrank\HTMLDOM\Parser;

use PrinsFrank\HTMLDOM\DOM\DOM;
use PrinsFrank\HTMLDOM\Parser\NodeParser\NodeParser;
use PrinsFrank\HTMLDOM\Parser\StateParser\State;
use PrinsFrank\HTMLDOM\Parser\StateParser\StateParser;

class Parser
{
    public static function parse(string $string): DOM
    {
        $DOM         = new DOM();
        $currentNode = $DOM;
        $state       = new State();
        foreach (mb_str_split($string) as $character) {
            if (StateParser::changesWith($state, $character)) {
                $currentNode = StateParser::handle($state, $currentNode, $character);

                continue;
            }

            $currentNode = NodeParser::parseCharacter($currentNode, $character);
        }

        return $DOM;
    }
}
