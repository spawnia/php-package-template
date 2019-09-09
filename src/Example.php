<?php

declare(strict_types=1);

namespace Spawnia\Library;

class Example
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function greet(): string
    {
        return "Hello $this->name";
    }
}
