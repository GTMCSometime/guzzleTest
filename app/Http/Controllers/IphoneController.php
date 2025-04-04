<?php

namespace App\Http\Controllers;


class IphoneController extends BaseController
{
    public function store() {
        $this->service->store();
        return response()->json(['message' => 'Продукты получены и сохранены в BD'], 200);
    }
    }

