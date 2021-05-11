<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\Parser\State;

class InNodeClosingTagStart implements Context
{
    public static function handle(State $state, string $char): void
    {
        $state->context = InNodeTagName::class;
    }
}