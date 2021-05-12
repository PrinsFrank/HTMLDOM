<?php

namespace PrinsFrank\HTMLDOM\DOM\Node;

class ElementNode implements Node
{
    /** @var array<string, string|null> */
    private array  $attributes;
    public ?string $name;

    /** @var Node[]  */
    private array  $children;
    private Node $parent;

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function setAttribute(string $name, ?string $value): self
    {
        $this->attributes[$name] = $value;

        return $this;
    }

    public function addChild(Node $childNode): self
    {
        $childNode->setParent($this);
        $this->children[] = $childNode;

        return $this;
    }

    public function setParent(Node $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getParent(): Node
    {
        return $this->parent;
    }
}
