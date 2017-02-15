<?php

namespace SebastiaanLuca\FileGenerator\Tests\Integration;

use SebastiaanLuca\FileGenerator\StubGenerator;
use SebastiaanLuca\FileGenerator\TestCase;

class StubGeneratorTest extends TestCase
{
    public function testItWillGenerateAFileFromAStub()
    {
        $stub = new StubGenerator(
            __DIR__ . '/../stubs/migration.stub',
            __DIR__ . '/../files/migration.php',
            [
                ':CLASS_NAME:' => 'CreateNotificationsTable',
                ':TABLE_NAME:' => 'notifications',
            ],
            false
        );

        $stub->render();

        $this->assertFileExists(__DIR__ . '/../files/migration.php');
    }
}
