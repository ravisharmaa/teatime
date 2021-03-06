<?php

namespace App\Services\TeaBrewer;

use Carbon\Carbon;

class Timer
{
    protected $temperature;
    protected $time;
    protected $timer;
    protected $type;

    public function __construct($type, $time, $temperature)
    {
        $this->timer = Carbon::now();

        $this->temperature = $temperature;
        $this->time = $time;
        $this->type = $type;
    }

    public function drinkable()
    {
        return with(clone $this->timer)
            ->addSeconds($this->time);
    }
}
