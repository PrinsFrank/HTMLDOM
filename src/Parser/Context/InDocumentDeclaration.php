<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\DOM\Node\DocumentTypeNode;
use PrinsFrank\HTMLDOM\DOM\Node\Node;

class InDocumentDeclaration implements Context
{
    public static function handle(string &$context, Node $node, string $buffer, string $char): Node
    {
        if ($char === '>') {
            $childNode = new DocumentTypeNode();
            $node->addChild($childNode);
            $context = InRootContent::class;
            return $node;
        }

        return $node;
    }
}