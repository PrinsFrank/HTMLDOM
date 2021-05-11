<?php

namespace PrinsFrank\HTMLDOM\Parser\Context;

use PrinsFrank\HTMLDOM\Parser\State;

interface Context
{
    public static function handle(State $state, string $char): void;
}
