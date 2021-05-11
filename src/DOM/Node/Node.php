<?php

namespace PrinsFrank\HTMLDOM\DOM\Node;

interface Node
{
    public function addChild(Node $childNode): self;

    public function setParent(Node $parent): self;
}
