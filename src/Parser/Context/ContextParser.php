<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\DOM\Node\Node;

class ContextParser
{
    public static function handle(string &$context, Node $currentNode, string $buffer, string $character): Node
    {
        /** @var Context $context */
        return $context::handle($context, $currentNode, $buffer, $character);
    }
}