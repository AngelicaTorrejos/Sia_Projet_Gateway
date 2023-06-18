<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;

class User3Service{

use ConsumesExternalService;

    /**
    * The base uri to consume the User2 Service
    * @var string
    */
    public $baseUri;


    public function __construct()
    {
        $this->baseUri =
        config('services.users3.base_uri');
    }

    public function obtainUsers3()
        {
        return $this->performRequest('GET','/bal'); 
        
        }

        public function createUser3($data)
        {
        return $this->performRequest('POST', '/auser',$data);
        }

        public function obtainUser3($id)
        {
        return $this->performRequest('GET', "/guser/{$id}");
        }

        public function editUser3($data, $id)
        {
        return $this->performRequest('PUT',"/uuser/{$id}", $data);
        }

        public function deleteUser3($id)
        {
        return $this->performRequest('DELETE', "/duser/{$id}");
        }
        public $secret;
        public function _construct()
        {
        $this->baseUri = config('services.users3.base_uri');$this->secret =config('services.users3.secret');
        }
    }