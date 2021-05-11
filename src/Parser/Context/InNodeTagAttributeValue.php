<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\Parser\State;

class InNodeTagAttributeValue implements Context
{
    public static function handle(State $state, string $char): void
    {
        if ($char === '"') {
            $state->currentNode->setAttribute($state->propertyNameCache, $state->buffer);
            $state->propertyNameCache = '';
            $state->context = InNodeTagAttributeAssignmentEnding::class;
        }
    }
}