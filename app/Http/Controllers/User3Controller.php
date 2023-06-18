<?php

//  <-- CONTROLLER - THE MIDDLE MAN

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request; // <-- handling http request in lumen
use App\Models\User; // <-- The model
use App\Traits\ApiResponser; // <-- use to standardized our code for api response
use App\Services\User3Service;

// use DB;  // <---if you're not using lumen eloquent you can use DB component in lumen

class User3Controller extends Controller
{
    use ApiResponser;
    public $user1Service;
    public function __construct(User3Service $user3Service) {
        $this->user3Service = $user3Service;
        }
    
        public function all(){
           
        }


// GET (ID)
public function show($id)
{ 
    return $this->successResponse($this->user3Service->obtainUser3($id));
}

// ADD
public function add(Request $request)
{
    
    return $this->successResponse($this->user3Service->createUser3($request->all(),Response::HTTP_CREATED));
}

// UPDATE
public function up(Request $request, $id)
{
    return $this->successResponse($this->user3Service->editUser3($request->all(), $id));
}

// DELETE

public function del($id)
{
    return $this->successResponse($this->user3Service->deleteUser3($id));
}

    // Index

public function index()
    {
        return $this->successResponse($this->user3Service->obtainUsers3());
    }
}