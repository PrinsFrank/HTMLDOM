<?php

namespace PrinsFrank\HTMLDOM\Parser;

use PrinsFrank\HTMLDOM\DOM\DOM;
use PrinsFrank\HTMLDOM\DOM\Node\Node;

class ElementResolver
{
    public static function resolveParentElementWithName(State $state): node
    {
        $parent = $state->currentNode->getParent();
        if ($parent instanceof DOM
            || $state->currentNode->getName() === $state->previousBuffer) {
            $state->previousBuffer = '';
            return $parent;
        }

        $state->currentNode = $parent;
        return self::resolveParentElementWithName($state);
    }
}