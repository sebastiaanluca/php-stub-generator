<?php

namespace SebastiaanLuca\FileGenerator\Tests\Integration;

use SebastiaanLuca\FileGenerator\StubGenerator;
use SebastiaanLuca\FileGenerator\TestCase;

class StubGeneratorTest extends TestCase
{
    public function testItGeneratesAFile()
    {
        $target = __DIR__ . '/../files/migration.php';

        $stub = new StubGenerator(
            __DIR__ . '/../stubs/migration.stub',
            $target,
            [
                ':CLASS_NAME:' => 'CreateNotificationsTable',
                ':TABLE_NAME:' => 'notifications',
            ],
            false
        );

        $stub->render();

        $this->assertFileExists($target);
    }

    public function testItReplacesPlaceholders()
    {
        $target = __DIR__ . '/../files/migration.php';

        $stub = new StubGenerator(
            __DIR__ . '/../stubs/migration.stub',
            $target,
            [
                ':CLASS_NAME:' => 'CreateNotificationsTable',
                ':TABLE_NAME:' => 'notifications',
            ],
            false
        );

        $stub->render();

        $file = file_get_contents($target);

        $this->assertContains('CreateNotificationsTable', $file);
        $this->assertContains('notifications', $file);

        $this->assertNotContains(':CLASS_NAME:', $file);
        $this->assertNotContains(':TABLE_NAME:', $file);
    }
}
