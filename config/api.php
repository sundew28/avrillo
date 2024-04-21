<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default driver
    |--------------------------------------------------------------------------
    |
    | You can change the api driver. 
    */
    
    'driver' => env('API_DRIVER', 'kanye'),
    'api_url' => env('API_DEFAULT_URL', 'https://api.kanye.rest'),
];