<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // gets converted to HTML - does not return plaintext!
    return 'hello world';
});

Route::get('/pokemon', function () {
    // this is smartly converted to json // raw response
    return [1, 2, 3];
});
