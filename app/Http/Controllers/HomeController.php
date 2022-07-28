<?php

namespace App\Http\Controllers;

use App\libs\UniversalMethods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        /*$rules = [
            'full_name' => 'required',
            'email' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        UniversalMethods::userMessage("Check errors:", "error", $validator->errors()->toArray());
        return view('index');*/
        UniversalMethods::userMessage("Well done!", "success");
        return view('index');
    }

    public function login(Request $request)
    {
        return redirect()->back()
            ->withInput();
    }
}
