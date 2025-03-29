<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class User1Service
{
    use ConsumesExternalService;

    /**
     * The base URI to consume the User1 Service
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.users1.base_uri');
    }

   /**
    *@return string
    */
    public function obtainUsers1()
    {
        return $this->performRequest('GET', '/users');
    }

    /**
     * 
     * @return string
     */
    public function createUser1($data)
    {
        return $this->performRequest('POST', '/users', $data);
    }

    /**
     * @return string
     */
    public function obtainUser1($id)
    {
        return $this->performRequest('GET', "/users/{$id}");
    }

    /**
     * @return string
     */
    public function editUser1($data, $id)
    {
        return $this->performRequest('PUT', "/users{$id}", $data);
    }

     /**
     * @return string
     */
    public function deleteUser1($id)
    {
        return $this->performRequest('DELETE', "/users/{$id}");
    }

    
}