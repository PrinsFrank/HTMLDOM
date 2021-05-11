<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\Parser\State;

class InNodeTagStart implements Context
{
    public static function handle(State $state, string $char): void
    {
        if ($char === '!') {
            $state->context = InDocumentDeclaration::class;
            return;
        }

        if ($char === '/') {
            $state->context = InNodeClosingTagStart::class;
            return;
        }

        $state->context = InNodeTagName::class;
    }
}
