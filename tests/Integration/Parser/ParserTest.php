<?php

namespace PrinsFrank\HTMLDOM\Tests\Integration\Parser;

use PHPUnit\Framework\TestCase;
use PrinsFrank\HTMLDOM\DOM\DOM;
use PrinsFrank\HTMLDOM\DOM\Node\ElementNode;
use PrinsFrank\HTMLDOM\DOM\Node\DocumentTypeNode;
use PrinsFrank\HTMLDOM\HTMLDOMParser;

/**
 * @coversDefaultClass \PrinsFrank\HTMLDOM\HTMLDOMParser
 */
class ParserTest extends TestCase
{
    /**
     * @cover ::parse
     */
    public function testParse(): void
    {
        static::assertEquals(
            (new DOM())
                ->setDocumentTypeNode(new DocumentTypeNode())
                ->setDocumentElementNode(
                    (new ElementNode())
                        ->setName('html')
                        ->setAttribute('foo', 'bar')
                ),
            HTMLDOMParser::parse('<!DOCTYPE html><html foo="bar"></html>')
        );
    }
}
