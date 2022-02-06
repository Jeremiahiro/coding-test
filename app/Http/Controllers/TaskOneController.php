<?php

namespace App\Http\Controllers;

use App\Contracts\TaskOne;
use Illuminate\Http\Request;

class TaskOneController extends Controller
{

    private $taskOne;

    public function __construct(TaskOne $taskOne)
    {
        $this->taskOne = $taskOne;        
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return redirect()->route('tasks.show', $this->taskOne->all() ? 2 : 1);
    }
}
