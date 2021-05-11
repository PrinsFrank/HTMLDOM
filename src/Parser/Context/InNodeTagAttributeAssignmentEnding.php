<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\Parser\State;

class InNodeTagAttributeAssignmentEnding implements Context
{
    public static function handle(State $state, string $char): void
    {
        if ($char === '>') {
            $state->context = InNodeTagClose::class;
            return;
        }

        if (trim($char) !== '') {
            $state->context = InNodeTagAttributeName::class;
            return;
        }

        $state->context = InNodeTag::class;
    }
}