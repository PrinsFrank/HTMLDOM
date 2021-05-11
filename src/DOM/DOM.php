<?php

namespace PrinsFrank\HTMLDOM\DOM;

use PrinsFrank\HTMLDOM\DOM\Node\ElementNode;
use PrinsFrank\HTMLDOM\DOM\Node\DocumentTypeNode;
use PrinsFrank\HTMLDOM\DOM\Node\Node;
use RuntimeException;

class DOM implements Node
{
    public ?bool             $hasBOM;
    public ?DocumentTypeNode $documentTypeNode;
    public ?ElementNode      $documentElementNode;

    public function hasBOM(bool $hasBOM = true): self
    {
        $this->hasBOM = $hasBOM;

        return $this;
    }

    public function setDocumentTypeNode(DocumentTypeNode $documentTypeNode): self
    {
        $this->documentTypeNode = $documentTypeNode;

        return $this;
    }

    public function setDocumentElementNode(ElementNode $documentElementNode): self
    {
        $this->documentElementNode = $documentElementNode;

        return $this;
    }

    public function addChild(Node $childNode): Node
    {
        if ($childNode instanceof DocumentTypeNode) {
            return $this->setDocumentTypeNode($childNode);
        }

        if ($childNode instanceof ElementNode) {
            return $this->setDocumentElementNode($childNode);
        }

        throw new RuntimeException();
    }

    public function setParent(Node $parent): self
    {
        throw new RuntimeException('A DOM cannot have a parent as it is the main element in a HTML document.');
    }

    public function setAttribute(string $name, ?string $value): Node
    {
        throw new RuntimeException('A DOM cannot have attributes');
    }
}
