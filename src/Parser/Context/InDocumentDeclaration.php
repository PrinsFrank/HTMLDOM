<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\DOM\Node\DocumentTypeNode;
use PrinsFrank\HTMLDOM\Parser\State;

class InDocumentDeclaration implements Context
{
    public static function handle(State $state, string $char): void
    {
        if ($char === '>') {
            $childNode = new DocumentTypeNode();
            echo 'adding childnode ' . $state->buffer . PHP_EOL;
            $state->currentNode->addChild($childNode);
            $state->context = InRootContent::class;
        }
    }
}