<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\Parser\State;

class InNodeTagAttributeName implements Context
{
    public static function handle(State $state, string $char): void
    {
        $state->propertyNameCache = $state->buffer;
        if (trim($char) === '') {
            $state->context = InNodeTag::class;
        }

        if ($char === "=") {
            $state->context = InNodeTagAttributeAssignment::class;
        }
    }
}
