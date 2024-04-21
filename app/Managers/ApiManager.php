<?php

namespace App\Managers;

use App\Drivers\Kanye;
use Illuminate\Support\Manager;

/**
 * The ApiManager class to load the required driver class 
 */
class ApiManager extends Manager
{
    public function createKanyeDriver(): Kanye
    {
        return new Kanye();
    }    

    public function getDefaultDriver()
    {
        return $this->config->get('api.driver');
    }
}