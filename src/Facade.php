<?php 

namespace Eastslopestudio\LaravelSanity;

use Sanity\Client as SanityClient;

class Facade extends \Illuminate\Support\Facades\Facade
{
    
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return SanityClient::class;
    }

}