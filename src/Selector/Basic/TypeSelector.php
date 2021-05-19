<?php

namespace PrinsFrank\HTMLDOM\Selector\Basic;

use PrinsFrank\HTMLDOM\DOM\Node\Node;
use PrinsFrank\HTMLDOM\Selector\Selector;

class TypeSelector extends Selector
{
    public function __construct(private $type) { }

    public function matches(Node $node): bool
    {
        return $node->getType() === $this->type;
    }
}
