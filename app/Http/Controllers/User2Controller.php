<?php

//  <-- CONTROLLER - THE MIDDLE MAN

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request; // <-- handling http request in lumen
use App\Models\User; // <-- The model
use App\Traits\ApiResponser; // <-- use to standardized our code for api response
use App\Services\User2Service;

// use DB;  // <---if you're not using lumen eloquent you can use DB component in lumen

class User2Controller extends Controller
{
    use ApiResponser;
    public $user1Service;
    public function __construct(User2Service $user2Service) {
        $this->user2Service = $user2Service;
        }
    
        public function all(){
           
        }


// GET (ID)
public function show($id)
{ 
    return $this->successResponse($this->user2Service->obtainUser2($id));
}

// ADD
public function add(Request $request)
{
    
    return $this->successResponse($this->user2Service->createUser2($request->all(),Response::HTTP_CREATED));
}

// UPDATE
public function up(Request $request, $id)
{
    return $this->successResponse($this->user2Service->editUser2($request->all(), $id));
}

// DELETE

public function del($id)
{
    return $this->successResponse($this->user2Service->deleteUser2($id));
}

    // Index

public function index()
    {
        return $this->successResponse($this->user2Service->obtainUsers2());
    }
}