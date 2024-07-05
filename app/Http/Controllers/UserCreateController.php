<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCreateController extends Controller
{
    public $user;
    
    public function __construct(IUserRepository $user){ 
        $this->user = $user;
    }


    public function index(){
        $user = $this->user->UserCreate();
        return view("welcome");
    }
}
