<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\DOM\Node\Node;

class InRootContent implements Context
{
    public static function handle(string &$context, Node $node, string $buffer, string $char): Node
    {
        if ($char === '<') {
            $context = InNodeTagName::class;
        }

        return $node;
    }
}
