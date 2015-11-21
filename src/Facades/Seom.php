<?php namespace Tudorica\Seom\Facades;

use Illuminate\Support\Facades\Facade;

class Seom extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'seom';
    }
 }