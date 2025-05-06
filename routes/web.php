<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    // gets converted to HTML - does not return plaintext!
    return 'hello world';
});

Route::get('/pokemon/{name}', function (string $name) {
    // still seems dangerous
    $response = Http::get(sprintf('https://pokeapi.co/api/v2/pokemon/%s', $name));
    return $response;
    // WOW i forgot how much data pokeapi returns
});
