<?php

namespace CurioLabs\NameParser;

use PHPUnit\Framework\TestCase;
use CurioLabs\NameParser\Part\Firstname;
use CurioLabs\NameParser\Part\Initial;
use CurioLabs\NameParser\Part\Lastname;
use CurioLabs\NameParser\Part\LastnamePrefix;
use CurioLabs\NameParser\Part\Middlename;
use CurioLabs\NameParser\Part\Nickname;
use CurioLabs\NameParser\Part\Salutation;
use CurioLabs\NameParser\Part\Suffix;

class NameTest extends TestCase
{
    public function testToString()
    {
        $parts = [
            new Salutation('Mr', 'Mr.'),
            new Firstname('James'),
            new Middlename('Morgan'),
            new Nickname('Jim'),
            new Initial('T.'),
            new Lastname('Smith'),
            new Suffix('I', 'I'),
        ];

        $name = new Name($parts);

        $this->assertSame($parts, $name->getParts());
        $this->assertSame('Mr. James (Jim) Morgan T. Smith I', (string) $name);
    }

    public function testGetNickname()
    {
        $name = new Name([
            new Nickname('Jim'),
        ]);

        $this->assertSame('Jim', $name->getNickname());
        $this->assertSame('(Jim)', $name->getNickname(true));
    }

    public function testGettingLastnameAndLastnamePrefixSeparately()
    {
        $name = new Name([
            new Firstname('Frank'),
            new LastnamePrefix('van'),
            new Lastname('Delft'),
        ]);

        $this->assertSame('Frank', $name->getFirstname());
        $this->assertSame('van', $name->getLastnamePrefix());
        $this->assertSame('Delft', $name->getLastname(true));
        $this->assertSame('van Delft', $name->getLastname());
    }
}
