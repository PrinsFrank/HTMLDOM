<?php

namespace PrinsFrank\HTMLDOM\DOM\Node;

use RuntimeException;

class DocumentTypeNode implements Node
{
    public function addChild(Node $childNode): Node
    {
        throw new RuntimeException('A document type is not allowed to have a child node');
    }

    public function setParent(Node $parent): self
    {
        throw new RuntimeException('A document type can not have a parent other than the DOM');
    }

    public function setAttribute(string $name, ?string $value): Node
    {
        throw new RuntimeException('A document type can not have attributes');
    }

    public function getParent(): Node
    {
        throw new RuntimeException('A document type can not have a parent other than the DOM');
    }

    public function getName(): string
    {
        return '!DOCTYPE';
    }
}
