<?php

use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    return response()->json(['massage' => 'API is working']);
});
