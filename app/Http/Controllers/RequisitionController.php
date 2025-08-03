<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RequisitionController extends Controller
{
    //
        public function __construct() {
        $this->middleware('auth');
    }


     public function index()
    {
          $users = User::orderBy('id','asc');
        return view('requisitions.index',compact('users'));
    }
}
