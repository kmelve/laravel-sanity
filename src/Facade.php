<?php 

namespace Eastslopestudio\LaravelSanity;

class Facade extends \Illuminate\Support\Facades\Facade
{
    
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return Sanity::class;
    }

}