<?php

namespace PrinsFrank\HTMLDOM\Selector\Basic;

use PrinsFrank\HTMLDOM\Selector\Selector;

class ClassSelector extends AttributeSelector
{
    public function __construct(private string $class)
    {
        parent::__construct('class', $this->class);
    }
}
