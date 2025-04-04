<?php

namespace App\Http\Controllers;
use App\Components\ImportDataClient;
use App\Models\Iphone;
use Illuminate\Http\Request;

class IphoneController extends Controller
{
    public function store() {
        $import = new ImportDataClient('iphone');
        $response = $import->client->request('get');
        $data = (json_decode($response->getBody()->getContents()));
        foreach($data as $items) {
            if(is_int($items)) continue;
            foreach($items as $item) {
               Iphone::firstOrCreate([
                    'title' => $item->title,
                    'description' => $item->description,
                    'category' => $item->category,
                    'price' => $item->price,
                    'discountPercentage' => $item->discountPercentage,
                    'rating' => $item->rating,
                    'stock' => $item->stock,
                    'tags' => implode(",", $item->tags),
                    'brand' => $item->brand,
                    'sku' => $item->sku,
                    'weight' => $item->weight,
                    'dimensions' => implode(",",json_decode(json_encode($item->dimensions), true)),
                    'warrantyInformation' => $item->warrantyInformation,
                    'shippingInformation' => $item->shippingInformation,
                    'availabilityStatus' => $item->availabilityStatus,
                    'reviews' => implode(',', array_map(function($item){
                        return implode(',', $item);
                    },
                json_decode(json_encode($item->reviews), true))),
                    'returnPolicy' => $item->returnPolicy,
                    'minimumOrderQuantity' => $item->minimumOrderQuantity,
                    'meta' => implode(",",json_decode(json_encode($item->meta), true)),
                    'images' => implode(",", $item->images),
                    'thumbnail' => $item->thumbnail,
                ]);
            }
        }
        return response()->json(['message' => 'Продукты получены и сохранены в BD'], 200);
    }
    }

