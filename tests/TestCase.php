<?php

namespace SebastiaanLuca\StubGenerator\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function tearDown()
    {
        $files = glob(__DIR__ . '/files/*');

        collect($files)->each(function ($file) {
            unlink($file);
        });
    }
}
