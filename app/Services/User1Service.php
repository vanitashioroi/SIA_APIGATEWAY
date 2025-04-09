<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class User1Service
{
    use ConsumesExternalService;

    public $baseUri;
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.users1.base_uri');
        $this->secret = config('services.users1.secret');
    }

    public function obtainUsers1()
    {
        return $this->performRequest('GET', '/users', [], [
            'Authorization' => config('services.users1.secret')        ]);
    }

    public function createUser1($data)
    {
        return $this->performRequest('POST', '/users', $data, [
            'Authorization' => config('services.users1.secret')        ]);
    }

    public function obtainUser1($id)
    {
        return $this->performRequest('GET', "/users/{$id}", [], [
            'Authorization' => config('services.users1.secret')        ]);
    }

    public function editUser1($data, $id)
    {
        return $this->performRequest('PUT', "/users/{$id}", $data, [
            'Authorization' => config('services.users1.secret')        ]);
    }

    public function deleteUser1($id)
    {
        return $this->performRequest('DELETE', "/users/{$id}", [], [
            'Authorization' => config('services.users1.secret')        ]);
    }
}
