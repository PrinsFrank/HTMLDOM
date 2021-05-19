<?php

namespace PrinsFrank\HTMLDOM\Selector\Basic;

use PrinsFrank\HTMLDOM\DOM\Node\Node;
use PrinsFrank\HTMLDOM\Selector\Selector;

class UniversalSelector extends Selector
{
    public function matches(Node $node): bool
    {
        return true;
    }
}
