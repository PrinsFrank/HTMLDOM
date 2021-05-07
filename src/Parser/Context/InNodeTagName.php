<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\DOM\Node\ElementNode;
use PrinsFrank\HTMLDOM\DOM\Node\Node;

class InNodeTagName implements Context
{
    public static function handle(string &$context, Node $node, string $buffer, string $char): Node
    {
        if ($char === '!') {
            $context = InDocumentDeclaration::class;
        }

        if (trim($char) === '') {
            $childNode = (new ElementNode())->setName($buffer);
            $node->addChild($childNode);
            $context = InNodeTag::class;
            return $childNode;
        }

        return $node;
    }
}
