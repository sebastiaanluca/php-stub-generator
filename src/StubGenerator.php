<?php

namespace SebastiaanLuca\FileGenerator;

use RuntimeException;

class StubGenerator
{
    /**
     * @var string
     */
    protected $path;

    /**
     * @var array
     */
    protected $replacements;

    /**
     * @param string $path
     * @param array $replacements
     */
    public function __construct(string $path, array $replacements)
    {
        $this->path = $path;
        $this->replacements = $replacements;
    }

    /**
     * @param string $target
     *
     * @throws \RuntimeException
     */
    public function render(string $target)
    {
        if (file_exists($target)) {
            throw new RuntimeException('Cannot generate file from stub. Target file ' . $target . ' already exists.');
        }

        $contents = file_get_contents($this->path);

        collect($this->replacements)->each(function (string $replacement, string $tag) use (&$contents) {
            $contents = str_replace($tag, $replacement, $contents);
        });

        $path = pathinfo($target, PATHINFO_DIRNAME);

        if (! file_exists($path)) {
            mkdir($path, 0777, true);
        }

        file_put_contents($target, $contents);
    }
}
