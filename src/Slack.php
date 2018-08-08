<?php

namespace Piestar\Slack\Laravel;

class Slack extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'slack';
    }
}

