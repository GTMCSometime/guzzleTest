<?php

namespace App\Components;

use GuzzleHttp\Client;

class ImportDataClient {
    public $client;
    public function __construct(public $product) {
        $this->client = new Client([
            'base_uri' => "https://dummyjson.com/products/search?q={$this->product}",
            'timeout' => 2.0,
        ]);
    }
}