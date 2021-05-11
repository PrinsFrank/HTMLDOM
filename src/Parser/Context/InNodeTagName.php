<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\DOM\Node\ElementNode;
use PrinsFrank\HTMLDOM\Parser\State;

class InNodeTagName implements Context
{
    public static function handle(State $state, string $char): void
    {
        if ($char === '>') {
            $state->context = InNodeTagClose::class;
            return;
        }

        if (trim($char) === '') {
            $childNode = (new ElementNode())->setName($state->buffer);
            $state->currentNode->addChild($childNode);
            $state->context = InNodeTag::class;
            $state->currentNode = $childNode;
        }
    }
}
