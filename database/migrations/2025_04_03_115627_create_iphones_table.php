<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('iphones', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('category');
            $table->integer('price');
            $table->integer('discountPercentage');
            $table->integer('rating');
            $table->integer('stock');
            $table->string('tags');
            $table->string('brand');
            $table->string('sku');
            $table->string('weight');
            $table->string('dimensions');;
            $table->string('warrantyInformation');
            $table->string('shippingInformation');
            $table->string('availabilityStatus');
            $table->text('reviews');
            $table->string('returnPolicy');
            $table->string('minimumOrderQuantity');
            $table->string('meta');
            $table->longText('images');
            $table->string('thumbnail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iphones');

    }
};
