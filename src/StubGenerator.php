<?php

namespace SebastiaanLuca\FileGenerator;

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

    public function render()
    {
        $contents = file_get_contents($this->path);

        collect($this->replacements)->each(function (string $replacement, string $tag) use (&$contents) {
            $contents = str_replace($tag, $replacement, $contents);
        });

        $path = storage_path('app/generator/');

        mkdir($path, 0777, true);

        file_put_contents($path . 'migration.php', $contents);
    }
}
