<?php

namespace SebastiaanLuca\FileGenerator;

use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function setUp()
    {
        parent::setUp();
    }

    protected function tearDown()
    {
        // TODO: delete all files (see spatie media library tests)
        parent::tearDown();
    }
}
