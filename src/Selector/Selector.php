<?php

namespace PrinsFrank\HTMLDOM\Selector;

use PrinsFrank\HTMLDOM\DOM\Node\Node;

abstract class Selector
{
    abstract public function matches(Node $node): bool;
}
