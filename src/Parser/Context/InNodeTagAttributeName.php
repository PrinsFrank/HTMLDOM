<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\DOM\Node\Node;

class InNodeTagAttributeName implements Context
{
    public static function handle(string &$context, Node $node, string $buffer, string $char): Node
    {
        if (trim($char) === '') {
            $context = InNodeTag::class;
        }

        if ($char === "=") {
            $context = InNodeTagAttributeAssignment::class;
        }

        return $node;
    }
}
