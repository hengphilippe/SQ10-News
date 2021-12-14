<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    // get => /admin/users
    public function index(){
        if(Gate::allows('isAdmin')) {
            return "Hello Admin";
        }
        abort(403);
    }
}
