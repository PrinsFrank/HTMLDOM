<?php

namespace PrinsFrank\HTMLDOM\DOM\Node;

interface Node
{
    public function addChild(Node $childNode): self;

    public function setParent(Node $parent): self;

    public function setAttribute(string $name, ?string $value): self;

    public function getParent(): Node;
}
