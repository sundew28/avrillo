<?php

namespace App\Drivers;

use App\Drivers\Interface\ApiInterface;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Response;

/**
 * The kanye api driver class to implement the REST api calls to Kanye
 */
class Kanye implements ApiInterface
{
    /**
     * URL to grab the data
     * @var string $url 
     */
    public string $url;

    /**
     * To store the response
     * @var $data
     */
    private array $response =[];

    /**
     * Grab 5 random quotes
     * @return Json $response
     */
    public function quotes(): mixed
    {
        ///
        $this->url = config('api.api_url');
        
        for($i=0; $i<5; $i++){
            $response["quotes"][] = $this->fetchData($this->url);
        }
        return response()->json($response);
    }

    /**
     * Refresh and grab 5 random quotes
     * @return Json $response
     */
    public function refreshQuotes(): mixed
    {
        $this->url = config('api.api_url');
        
        for($i=0; $i<5; $i++){
            $response["quotes"][] = $this->fetchData($this->url);
        }
        return response()->json($response);
    }

    /**
     * Fetch data from the URL
     * @return mixed $result
     */
    public function fetchData(string $url): mixed
    {     
        // fetch the data   
        $jsonData = Http::get($url)['quote'];

        // return result
        if(!empty($jsonData)) {
            return $jsonData;
        } 
    }
}