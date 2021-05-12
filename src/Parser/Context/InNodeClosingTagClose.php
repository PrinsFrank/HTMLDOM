<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\Parser\ElementResolver;
use PrinsFrank\HTMLDOM\Parser\State;

class InNodeClosingTagClose implements Context
{
    public static function handle(State $state, string $char): void
    {
        $state->currentNode = ElementResolver::resolveParentElementWithName($state);
        if ($char === '<') {
            $state->context = InNodeTagStart::class;
            return;
        }

        $state->context = InRootContent::class;
    }
}