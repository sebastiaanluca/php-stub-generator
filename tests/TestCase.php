<?php

namespace SebastiaanLuca\StubGenerator\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function tearDown()
    {
        parent::tearDown();

        $tempDir = __DIR__ . '/files';

        system('/bin/rm -rf ' . escapeshellarg($tempDir));
    }
}
