<?php

namespace PrinsFrank\HTMLDOM\Selector\Basic;

use PrinsFrank\HTMLDOM\DOM\Node\Node;
use PrinsFrank\HTMLDOM\Selector\Selector;

class AttributeSelector extends Selector
{
    public function __construct(private $attribute, private $attributeValue) { }

    public function matches(Node $node): bool
    {
        foreach($node->getAttributes() as $attributeName => $attributeValue) {
            if ($attributeName === $this->attribute && $attributeValue === $this->attributeValue) {
                return true;
            }
        }

        return false;
    }
}
