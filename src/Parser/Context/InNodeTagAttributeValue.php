<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\DOM\Node\Node;

class InNodeTagAttributeValue implements Context
{
    public static function handle(string &$context, Node $node, string $buffer, string $char): Node
    {
        if ($char === '"') {
            $context = InNodeTag::class;
        }

        return $node;
    }
}