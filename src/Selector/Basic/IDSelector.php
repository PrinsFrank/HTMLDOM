<?php

namespace PrinsFrank\HTMLDOM\Selector\Basic;

use PrinsFrank\HTMLDOM\Selector\Selector;

class IDSelector extends AttributeSelector
{
    public function __construct(private string $id)
    {
        parent::__construct('id', $this->id);
    }
}
