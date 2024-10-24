<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicle;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function addUser(Request $req){

        $req->validate([
            //input name => validation type.
            'name' => 'required | min : 4 | max : 30',
            'email'  => 'required | email',
            'password' => 'required | alpha_num',
            'brand'    => 'required',
            'model'   => 'required',
            'speed'  => 'required',
            'horsepower' => 'required',
            'torque'     => 'required'
        ]);


       //variable name = new ModelName
        $data = new vehicle;

    // varName->table columnName = request variable->input name attribute.        
        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = $req->password;
        $data->car_brand = $req->brand;
        $data->car_model = $req->model;
        $data->top_speed = $req->speed;
        $data->horsepower = $req->horsepower;
        $data->torque = $req->torque;
        $data->save();

        if($data){
            return redirect('login');
            //echo "Data added successfully";
        }else{
            echo "data not added";
        }
    }

    function display(){
        $data = vehicle::all();
        return view('display',['vehicleData' => $data]);
    }


    function delete($id){
        $delete = vehicle::destroy($id);
        if($delete){
            return redirect('display');
        }
    }


    function update($id){
        //return $id;
        $update = vehicle::find($id);
        //return $update;
        return view('update',['updateData' => $update]);
    }


    function updatevehicle(Request $req,$id){
        //return $id;
        //return $req->input();

        $updated = vehicle::find($id);
        $updated->name       = $req->name;
        $updated->email      = $req->email;
        $updated->car_brand  = $req->brand;
        $updated->car_model  = $req->model;
        $updated->top_speed  = $req->speed;
        $updated->horsepower = $req->horsepower;
        $updated->torque     = $req->torque;
        if($updated->save()){
            return view('display');
        }else{
            echo "Data not updated";
        }   
    }

    function search(Request $req){
        $searchData = vehicle::where('name','like',"%$req->search%")->get();
        // dd($req);
        return view('display',['vehicleData'=>$searchData,'search'=>$req->search]);
    }



    function login(Request $req){
        // dd($req);
        $credentials = $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('display');
        }
    }


    function displayPage(){
        if(Auth::check()){
            return view('display');
        }else{
            return view('login');
        }
    }


    function logout(){
        Auth::logout();
        return view('login');
    }
}
