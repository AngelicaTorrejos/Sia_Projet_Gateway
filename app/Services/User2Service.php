<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;

class User2Service{

use ConsumesExternalService;

    /**
    * The base uri to consume the User2 Service
    * @var string
    */
    public $baseUri;


    public function __construct()
    {
        $this->baseUri =
        config('services.users2.base_uri');
    }

    public function obtainUsers2()
        {
        return $this->performRequest('GET','/withdraw'); 
        
        }

        public function createUser2($data)
        {
        return $this->performRequest('POST', '/auser',$data);
        }

        public function obtainUser2($id)
        {
        return $this->performRequest('GET', "/guser/{$id}");
        }

        public function editUser2($data, $id)
        {
        return $this->performRequest('PUT',"/uuser/{$id}", $data);
        }

        public function deleteUser2($id)
        {
        return $this->performRequest('DELETE', "/duser/{$id}");
        }
        public $secret;
        public function _construct()
        {
        $this->baseUri = config('services.users2.base_uri');$this->secret =config('services.users2.secret');
        }
    }