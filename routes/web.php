<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

define("TYPES", array("name", "base_experience", "height", "weight", "types"));

Route::get('/', function () {
    // gets converted to HTML - does not return plaintext!
    return 'hello world';
});

Route::get('/pokemon/{name}', function (string $name) {
    $response = Http::withUrlParameters([
        'endpoint' => 'https://pokeapi.co/api/v2',
        'group' => 'pokemon',
        'name' => $name
    ])->get('{+endpoint}/{group}/{name}');

    if ($response->successful()) {
        // I actually don't know why I can't do collect(TYPES), but the
        // documentation is very sparse for that method.

        //$data = $response->fluent();
        return $response->fluent()->collect(TYPES);

        // nb: this seems OK, but the formatting of the types array
        // (in the response) is kind of weird, and includes extra info
        // that isn't needed. Could be refined perhaps.
    } else {
        return 'Request failed:<br>'.$response;
    }
});
