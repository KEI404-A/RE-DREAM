<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController675;

Route::get('/', function () {
    return redirect()->route('properties_675.index');
});

// Gunakan parameter name yang sama dengan controller
Route::resource('properties_675', PropertyController675::class)->parameters([
    'properties_675' => 'property_675'
]);