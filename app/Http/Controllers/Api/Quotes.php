<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Facades\QuotesApi;

class Quotes extends Controller
{
    /**
     *
     * Single action controller in use to keep the code clean , scable and easy to maintain. I have used the manager design 
     * pattern. A creational design pattern that allows for the construction of complex objects step by step
     *
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Usage of "rescue" function of laravel instead of try - catch        
        return rescue(
            fn () => QuotesApi::quotes(), 
            "No quotes found.",
            true
        );        
    }
}
