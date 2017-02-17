<?php

namespace SebastiaanLuca\StubGenerator\Tests\Integration;

use SebastiaanLuca\StubGenerator\StubGenerator;
use SebastiaanLuca\StubGenerator\Tests\TestCase;

class StubGeneratorTest extends TestCase
{
    public function testItGeneratesAFile()
    {
        $target = __DIR__ . '/../files/migration.php';

        $stub = new StubGenerator(
            __DIR__ . '/../stubs/migration.stub',
            $target
        );

        $stub->render([
            ':CLASS_NAME:' => 'CreateNotificationsTable',
            ':TABLE_NAME:' => 'notifications',
        ]);

        $this->assertFileExists($target);
    }

    public function testItReplacesPlaceholders()
    {
        $target = __DIR__ . '/../files/migration.php';

        $stub = new StubGenerator(
            __DIR__ . '/../stubs/migration.stub',
            $target
        );

        $stub->render([
            ':CLASS_NAME:' => 'CreateNotificationsTable',
            ':TABLE_NAME:' => 'notifications',
        ]);

        $file = file_get_contents($target);

        $this->assertContains('CreateNotificationsTable', $file);
        $this->assertContains('notifications', $file);

        $this->assertNotContains(':CLASS_NAME:', $file);
        $this->assertNotContains(':TABLE_NAME:', $file);
    }
}
