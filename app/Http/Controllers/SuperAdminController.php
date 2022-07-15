<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index(){
        return view('Superadmin.dashboard');
    }

    public function addSubscriber(Request $request){
       return view('Superadmin.Subscriber.addSubscriber');
    }
}
