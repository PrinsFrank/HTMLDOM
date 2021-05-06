<?php

namespace PrinsFrank\HTMLDOM\Parser\StateParser;

use PrinsFrank\HTMLDOM\DOM\Node;

class StateParser
{
    public static function changesWith(State $state, string $character): bool
    {
        return match($character) {
            '<', '>' => true,
            default => false
        };
    }

    public static function handle(State $state, Node $node, mixed $character): Node
    {

    }
}
