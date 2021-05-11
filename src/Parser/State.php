<?php

namespace PrinsFrank\HTMLDOM\Parser;

use PrinsFrank\HTMLDOM\DOM\Node\Node;
use PrinsFrank\HTMLDOM\Parser\Context\Context;
use PrinsFrank\HTMLDOM\Parser\Context\InRootContent;

class State
{
    /** @var Context */
    public string $context = InRootContent::class;
    public string $buffer  = '';
    public Node   $currentNode;

    public function __construct(Node $currentNode)
    {
        $this->currentNode = $currentNode;
    }
}