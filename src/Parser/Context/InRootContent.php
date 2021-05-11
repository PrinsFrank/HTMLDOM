<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\Parser\State;

class InRootContent implements Context
{
    public static function handle(State $state, string $char): void
    {
        if ($char === '<') {
            $state->context = InNodeTagName::class;
        }
    }
}
