<?php

//  <-- CONTROLLER - THE MIDDLE MAN

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request; // <-- handling http request in lumen
use App\Models\User; // <-- The model
use App\Traits\ApiResponser; // <-- use to standardized our code for api response
use App\Services\User1Service;

// use DB;  // <---if you're not using lumen eloquent you can use DB component in lumen

class User1Controller extends Controller
{
    use ApiResponser;
    public $user1Service;
    public function __construct(User1Service $user1Service) {
        $this->user1Service = $user1Service;
        }
    
        public function all(){
           
        }

// GET (ID)
public function show($id)
{ 
    return $this->successResponse($this->user1Service->obtainUser1($id));
}

// ADD
public function add(Request $request)
{
    
    return $this->successResponse($this->user1Service->createUser1($request->all(),Response::HTTP_CREATED));
}

// UPDATE
public function up(Request $request, $id)
{
    return $this->successResponse($this->user1Service->editUser1($request->all(), $id));
}

// DELETE

public function del($id)
{
    return $this->successResponse($this->user1Service->deleteUser1($id));
}

    // Index

public function index()
    {
        return $this->successResponse($this->user1Service->obtainUsers1());
    }
}