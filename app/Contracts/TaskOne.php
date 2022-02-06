<?php

namespace App\Contracts;

use App\Contracts\TaskOneContract;

class TaskOne implements TaskOneContract{

    public function all()
    {
        return true;
    }
}