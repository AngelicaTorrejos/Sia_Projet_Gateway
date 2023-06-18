<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;

class User1Service{
    
use ConsumesExternalService;

    /**
    * The base uri to consume the User1 Service
    * @var string
    */

    
    public $baseUri;

    public function __construct()
    {
        $this->baseUri =
        config('services.users1.base_uri');
    }

    public function obtainUsers1()
        {
        return $this->performRequest('GET','/pay'); 
        
        }

        public function createUser1($data)
        {
        return $this->performRequest('POST', '/auser',$data);
        }

        public function obtainUser1($id)
        {
        return $this->performRequest('GET', "/guser/{$id}");
        }

        public function editUser1($data, $id)
        {
        return $this->performRequest('PUT',"/uuser/{$id}", $data);
        }

        public function deleteUser1($id)
        {
        return $this->performRequest('DELETE', "/duser/{$id}");
        }

        public $secret;
        public function _construct()
        {
        $this->baseUri = config('services.users1.base_uri');$this->secret =config('services.users1.secret');
        }
    }