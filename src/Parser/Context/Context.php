<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\DOM\Node\Node;

interface Context
{
    public static function handle(string &$context, Node $node, string $buffer, string $char): Node;
}
