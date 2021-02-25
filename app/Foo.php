<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foo extends Model
{
    public function name()
    {
        $val = true;

        if ($val) {
            return 'good stuff';
        }
    }
}
