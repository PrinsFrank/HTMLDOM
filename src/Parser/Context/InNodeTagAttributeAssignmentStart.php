<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\Parser\State;

class InNodeTagAttributeAssignmentStart implements Context
{
    public static function handle(State $state, string $char): void
    {
        if ($char === '"') {
            $state->context = InNodeTagAttributeAssignmentEnding::class;
            return;
        }

        $state->context = InNodeTagAttributeValue::class;
    }
}