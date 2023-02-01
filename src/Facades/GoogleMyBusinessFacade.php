<?php

namespace IngressITSolutions\LaravelGoogleMyBusiness\Facades;

use Illuminate\Support\Facades\Facade;

class GoogleMyBusinessFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'IngressITSolutions\LaravelGoogleMyBusiness\GoogleMyBusiness';
    }
}