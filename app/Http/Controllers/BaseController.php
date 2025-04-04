<?php

namespace App\Http\Controllers;

use App\Service\ImportIphoneService;

abstract class BaseController extends Controller
{
    public $service;

    public function __construct(ImportIphoneService $service) {
        $this->service = $service;
    }
}
