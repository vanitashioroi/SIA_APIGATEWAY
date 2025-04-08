<?php

return [

    'users1' => [
        'base_uri' => env('USERS1_SERVICE_BASE_URL'),
    ],

    'users2' => [
        'base_uri' => env('USERS2_SERVICE_BASE_URL'),
    ],

    // 👇 Add this block
    'passport' => [
        'client_id' => env('CLIENT_ID'),
        'client_secret' => env('CLIENT_SECRET'),
    ],

];
 