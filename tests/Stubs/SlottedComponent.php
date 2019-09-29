<?php

namespace Spatie\ViewComponents\Tests\Stubs;

use Illuminate\Contracts\Support\Htmlable;

class SlottedComponent implements Htmlable
{
    private $slot;

    public function __construct($slot)
    {
        $this->slot = $slot;
    }

    public function toHtml(): string
    {
        return $this->slot;
    }
}
