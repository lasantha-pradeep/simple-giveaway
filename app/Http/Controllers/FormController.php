<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{

    public function index(){
        return view('dashboard')->with('forms', Form::all());
    }

    public function store(Request $request){

        $validated = $request->validate([
            'fname'=>'required|max:255|string',
            'lname'=>'required|max:255|string',
            'address1'=>'required|max:255|string',
            'address2'=>'max:255|string',
            'city'=>'required|max:255|string',
            'state'=>'required|max:255|string',
            'postalcode'=>'required|max:255|string',
            'phone'=>'required|max:255|string',
            'email'=>'required|unique:forms|max:255|email',
            'country'=>'required|max:255|string'
        ]);

        $form = Form::create([
            'fname'=> $validated["fname"],
            'lname'=> $validated["lname"],
            'address1'=> $validated["address1"],
            'city'=> $validated["city"],
            'state'=> $validated["state"],
            'postalcode'=> $validated["postalcode"],
            'phone'=> $validated["phone"],
            'email'=> $validated["email"],
            'country'=> $validated["country"],
        ]);

        if($validated["address2"]){
            $form->address2 = $validated["address2"];
            $form->save();
        }

        dd($form);

        Session::flash('success', ' Form Created Successfully');
        return redirect()->back();

    }
}
