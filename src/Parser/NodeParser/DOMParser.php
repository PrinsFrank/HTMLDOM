<?php

namespace PrinsFrank\HTMLDOM\Parser\NodeParser;

use InvalidArgumentException;
use PrinsFrank\HTMLDOM\DOM\DOM;
use PrinsFrank\HTMLDOM\DOM\Node;

class DOMParser implements ParsableNode
{
    public static function parseCharacter(Node $node, mixed $character): Node
    {
        if ($node instanceof DOM === false) {
            throw new InvalidArgumentException();
        }

        match($character) {
            '﻿' => $node->hasBOM(),
            default  => null
        };

        return $node;
    }
}
