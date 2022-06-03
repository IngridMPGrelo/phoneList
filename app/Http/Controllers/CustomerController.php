<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index() {

        $model = Customer::all();
        
        return view('index',
            [
                'model' => $model,
            ]
    );
    }
    
}
