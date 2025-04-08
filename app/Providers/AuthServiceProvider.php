<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use League\OAuth2\Server\AuthorizationServer;
use League\OAuth2\Server\Grant\ClientCredentialsGrant;
use DateInterval;

class AuthServiceProvider extends ServiceProvider
{
    public function register() {}

    public function boot()
    {
        // Register the client_credentials grant manually
        $server = $this->app->make(AuthorizationServer::class);
        $grant = new ClientCredentialsGrant();
        $server->enableGrantType($grant, new DateInterval('PT1H'));
    }
}
