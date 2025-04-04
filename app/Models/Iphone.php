<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Iphone extends Model
{
    protected $table = 'iphones';

    protected $fillable = [
    'title',
    'description',
    'category',
    'price',
    'discountPercentage',
    'rating',
    'discountPercentage',
    'rating',
    'stock', 
    'tags',
    'brand',
    'sku',
    'weight',
    'dimensions',
    'warrantyInformation',
    'shippingInformation', 
    'availabilityStatus',
    'reviews',
    'returnPolicy', 
    'minimumOrderQuantity', 
    'meta', 
    'images',
    'thumbnail',
    ];
}
