<?php

namespace PrinsFrank\HTMLDOM\Tests\Unit\DOMParser;

use PHPUnit\Framework\TestCase;
use PrinsFrank\HTMLDOM\DOM\DOM;
use PrinsFrank\HTMLDOM\Parser\Parser;

/**
 * @coversDefaultClass \PrinsFrank\HTMLDOM\Parser\Parser
 */
class ParserTest extends TestCase
{
    /**
     * @cover ::parse
     */
    public function testParse(): void
    {
        static::assertEquals((new DOM())->hasBOM(), Parser::parse('﻿'));
    }
}