<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\DOM\Node\Node;

class InNodeTagAttributeAssignment implements Context
{
    public static function handle(string &$context, Node $node, string $buffer, string $char): Node
    {
        if ($char === '"') {
            $context = InNodeTagAttributeValue::class;
        } else {
            $context = InNodeTag::class;
        }

        return $node;
    }
}