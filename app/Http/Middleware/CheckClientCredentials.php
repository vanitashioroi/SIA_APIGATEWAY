<?php

namespace App\Http\Middleware;

use Laravel\Passport\Http\Middleware\CheckClientCredentials as BaseCheckClientCredentials;

class CheckClientCredentials extends BaseCheckClientCredentials
{
    // Inherit everything. No need to override handle() or validate()
}
