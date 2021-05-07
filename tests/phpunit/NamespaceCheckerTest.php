<?php

namespace Ox6d617474\IsolateTest;

use PHPUnit\Framework\TestCase;
use Ox6d617474\Isolate\NamespaceChecker;

class TestNamespaceChecker extends TestCase {

    public function testIsNamespace() {
        $this->assertTrue( NamespaceChecker::isNamespace( '\\Vendor\\Prefix' ) );
        $this->assertFalse( NamespaceChecker::isNamespace( 'SomeRandomString' ) );
    }

}