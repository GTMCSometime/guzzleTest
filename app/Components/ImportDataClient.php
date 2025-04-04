<?php

namespace App\Components;

use GuzzleHttp\Client;

class ImportDataClient {
    public $client;
    public function __construct(public $needle, public $product) {
        $this->client = new Client([
            'base_uri' => "https://dummyjson.com/{$this->needle}/search?q={$this->product}",
            'timeout' => 2.0,
        ]);
    }
}