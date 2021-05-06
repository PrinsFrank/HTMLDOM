<?php

namespace PrinsFrank\HTMLDOM\Parser\NodeParser;

use PrinsFrank\HTMLDOM\DOM\Node;

interface ParsableNode
{
    public static function parseCharacter(Node $node, mixed $character): Node;
}
