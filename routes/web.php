<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // gets converted to HTML - does not return plaintext!
    return 'hello world';
});

Route::get('/pokemon/{name}', function (string $name) {
    // might be dangerous
    return sprintf("You want information on %s!", $name);
});
