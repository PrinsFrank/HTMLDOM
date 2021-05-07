<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\DOM\Node\ElementNode;
use PrinsFrank\HTMLDOM\DOM\Node\Node;

class InNodeTag implements Context
{
    public static function handle(string &$context, Node $node, string $buffer, string $char): Node
    {
        if (trim($char) !== '') {
            $context = InNodeTagAttributeName::class;
        }

        if ($char === '>') {
            $childNode = new ElementNode();
            $node->addChild($childNode);
            $context = InRootContent::class;
            return $node;
        }

        return $node;
    }
}