<?php

namespace PrinsFrank\HTMLDOM\DOM;

use PrinsFrank\HTMLDOM\DOM\Node\DocumentElementNode;
use PrinsFrank\HTMLDOM\DOM\Node\DocumentTypeNode;

class DOM implements Node
{
    public ?bool                $hasBOM;
    public ?DocumentTypeNode    $documentTypeNode;
    public ?DocumentElementNode $documentElementNode;

    public function hasBOM(bool $hasBOM = true): self
    {
        $this->hasBOM = $hasBOM;

        return $this;
    }
}
