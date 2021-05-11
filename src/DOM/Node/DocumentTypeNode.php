<?php

namespace PrinsFrank\HTMLDOM\DOM\Node;

use RuntimeException;

class DocumentTypeNode implements Node
{
    public function addChild(Node $childNode): Node
    {
        throw new RuntimeException();
    }

    public function setParent(Node $parent): self
    {
        throw new RuntimeException();
    }
}
