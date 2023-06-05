<?php

namespace Webstdy\Greeter;

use App\Models\User;

class Greeter
{
    public function greet(string $sName): string
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }
}
