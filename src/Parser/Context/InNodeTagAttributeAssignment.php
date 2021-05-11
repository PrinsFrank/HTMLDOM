<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\Parser\State;

class InNodeTagAttributeAssignment implements Context
{
    public static function handle(State $state, string $char): void
    {
        if ($char === '"') {
            $state->context = InNodeTagAttributeValue::class;
        } else {
            $state->context = InNodeTag::class;
        }
    }
}