<?php

namespace App\Drivers\Interface;

/**
 * Commmon Api interface
 */
interface ApiInterface
{
    public function quotes(): mixed;

    public function refreshQuotes(): mixed;

    public function fetchData(string $url): mixed;

    
}