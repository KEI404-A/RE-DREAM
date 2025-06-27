<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('properties_675', function (Blueprint $table_675) {
            $table_675->id();
            $table_675->string('title_675');
            $table_675->text('description_675');
            $table_675->decimal('price_675', 15, 2);
            $table_675->string('location_675');
            $table_675->enum('type_675', ['house', 'apartment', 'villa', 'office']);
            $table_675->integer('bedrooms_675');
            $table_675->integer('bathrooms_675');
            $table_675->integer('area_675'); // dalam m2
            $table_675->enum('status_675', ['available', 'sold', 'rented']);
            $table_675->string('image_675')->nullable();
            $table_675->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('properties_675');
    }
};