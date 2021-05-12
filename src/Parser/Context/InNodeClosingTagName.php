<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\DOM\Node\ElementNode;
use PrinsFrank\HTMLDOM\Parser\State;

class InNodeClosingTagName implements Context
{
    public static function handle(State $state, string $char): void
    {
        if ($char === '>') {
            $state->context = InNodeClosingTagClose::class;
        }

        if (trim($char) === '') {
            $state->context = InNodeClosingTag::class;
        }
    }
}
