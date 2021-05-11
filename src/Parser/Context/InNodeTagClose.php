<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\Parser\State;

class InNodeTagClose implements Context
{
    public static function handle(State $state, string $char): void
    {
        if ($char === '<') {
            $state->context = InNodeTagStart::class;
            return;
        }

        $state->context = InRootContent::class;
    }
}
