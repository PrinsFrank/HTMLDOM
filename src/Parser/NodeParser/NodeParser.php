<?php

namespace PrinsFrank\HTMLDOM\Parser\NodeParser;

use PrinsFrank\HTMLDOM\DOM\DOM;
use PrinsFrank\HTMLDOM\DOM\Node;

class NodeParser implements ParsableNode
{
    public static function parseCharacter(Node $node, mixed $character): Node
    {
        $nodeParser = match ($node::class) {
            DOM::class => DOMParser::class
        };

        /** @var ParsableNode $nodeParser */
        return $nodeParser::parseCharacter($node, $character);
    }
}
