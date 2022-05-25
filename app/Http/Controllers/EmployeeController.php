<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(Request $request){
        print_r($_POST);
        print_r($_FILES);
    }
}
