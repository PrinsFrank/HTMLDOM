<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\DOM\Node\ElementNode;
use PrinsFrank\HTMLDOM\Parser\State;

class InNodeTagName implements Context
{
    public static function handle(State $state, string $char): void
    {
        if ($char === '>' || trim($char) === '') {
            $childNode = (new ElementNode())->setParent($state->currentNode)->setName($state->buffer);
            $state->currentNode->addChild($childNode);
            $state->currentNode = $childNode;
        }

        if ($char === '>') {
            $state->context = InNodeTagClose::class;
        }

        if (trim($char) === '') {
            $state->context = InNodeTag::class;
        }
    }
}
