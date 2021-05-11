<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\Parser\State;

class ContextParser
{
    public static function handle(State $state, string $character): void
    {
        $previousContext = $state->context;
        $state->context::handle($state, $character);
        if ($previousContext !== $state->context) {
            $state->buffer = '';
        }

        $state->buffer .= $character;
    }
}
