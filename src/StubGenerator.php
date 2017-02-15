<?php

namespace SebastiaanLuca\FileGenerator;

use RuntimeException;

class StubGenerator
{
    /**
     * @var string
     */
    protected $source;

    /**
     * @var string
     */
    protected $target;

    /**
     * @var array
     */
    protected $replacements;

    /**
     * @var bool
     */
    protected $isModule;

    /**
     * @param string $source
     * @param string $target
     * @param array $replacements
     * @param bool $isModule
     */
    public function __construct(string $source, string $target, array $replacements, bool $isModule = false)
    {
        $this->source = $source;
        $this->target = $target;
        $this->replacements = $replacements;
        $this->isModule = $isModule;
    }

    /**
     * @throws \RuntimeException
     */
    public function render()
    {
        if (file_exists($this->target)) {
            throw new RuntimeException('Cannot generate file from stub. Target file ' . $this->target . ' already exists.');
        }

        $contents = file_get_contents($this->source);

        collect($this->replacements)->each(function (string $replacement, string $tag) use (&$contents) {
            $contents = str_replace($tag, $replacement, $contents);
        });

        $path = pathinfo($this->target, PATHINFO_DIRNAME);

        if (! file_exists($path)) {
            mkdir($path, 0777, true);
        }

        file_put_contents($this->target, $contents);
    }
}
