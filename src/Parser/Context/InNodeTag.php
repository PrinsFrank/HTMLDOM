<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\Parser\State;

class InNodeTag implements Context
{
    public static function handle(State $state, string $char): void
    {
        if ($char === '>') {
            $state->context = InNodeTagClose::class;
        }

        if (trim($char) !== '') {
            $state->context = InNodeTagAttributeName::class;
        }
    }
}