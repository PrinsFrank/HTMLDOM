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
    public function testParseEmptyPage(): void
    {
        static::assertEquals(
            new DOM(),
            HTMLDOMParser::parse('')
        );
    }

    /**
     * @cover ::parse
     */
    public function testParsePageWithoutDocType(): void
    {
        static::assertEquals(
            ($dom = new DOM())
                ->setDocumentElementNode(
                    (new ElementNode())
                        ->setParent($dom)
                        ->setName('html')
                        ->setAttribute('foo', 'bar')
                ),
            HTMLDOMParser::parse('<html foo="bar"></html>')
        );
    }

    /**
     * @cover ::parse
     */
    public function testParseWithOnlyDocType(): void
    {
        static::assertEquals(
            (new DOM())
                ->setDocumentTypeNode(new DocumentTypeNode()),
            HTMLDOMParser::parse('<!DOCTYPE html>')
        );
    }

    /**
     * @cover ::parse
     */
    public function testParse(): void
    {
        static::assertEquals(
            ($dom = new DOM())
                ->setDocumentTypeNode(new DocumentTypeNode())
                ->setDocumentElementNode(
                    (new ElementNode())
                        ->setParent($dom)
                        ->setName('html')
                        ->setAttribute('foo', 'bar')
                ),
            HTMLDOMParser::parse('<!DOCTYPE html><html foo="bar"></html>')
        );
    }

    /**
     * @cover ::parse
     */
    public function testParseNestedElements(): void
    {
        static::assertEquals(
            ($dom = new DOM())
                ->setDocumentTypeNode(new DocumentTypeNode())
                ->setDocumentElementNode(
                    ($htmlElem = new ElementNode())
                        ->setParent($dom)
                        ->setName('html')
                        ->setAttribute('foo', 'bar')
                        ->addChild(
                            ($div = new ElementNode())
                                ->setParent($htmlElem)
                                ->setName('div')
                                ->addChild(
                                    ($ul = new ElementNode())
                                        ->setParent($div)
                                        ->setName('ul')
                                        ->addChild(
                                            (new ElementNode())
                                                ->setParent($ul)
                                                ->setName('li')
                                        )
                                        ->addChild(
                                            (new ElementNode())
                                                ->setParent($ul)
                                                ->setName('li')
                                        )
                                )
                        )
                        ->addChild(
                            (new ElementNode())
                                ->setParent($htmlElem)
                                ->setName('div')
                        )
                ),
            HTMLDOMParser::parse('<!DOCTYPE html><html foo="bar"><div><ul><li></li><li></li></ul></div><div></div></html>')
        );
    }
    /**
     * @covers ::parse
     */
    public function testTraversesNonClosedElementsToCloseCorrectElement(): void
    {
        static::assertEquals(
            ($dom = new DOM())
                ->setDocumentElementNode(
                    ($htmlElem = new ElementNode())
                        ->setParent($dom)
                        ->setName('html')
                        ->addChild(
                            ($div = new ElementNode())
                                ->setParent($htmlElem)
                                ->setName('div')
                                ->addChild(
                                    (new ElementNode())
                                        ->setParent($div)
                                        ->setName('ul')
                                )
                        )
                        ->addChild(
                            (new ElementNode())
                                ->setParent($htmlElem)
                                ->setName('span')
                        )
                ),
            HTMLDOMParser::parse('<html><div><ul></div><span></span></html>')
        );
    }
}
