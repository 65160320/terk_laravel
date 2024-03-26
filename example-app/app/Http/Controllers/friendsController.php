<?php

namespace App\Http\Controllers;

use App\Models\friendsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class friendsController extends Controller
{
    
    public function index()
    {
       $data["friends"] = friendsModel::all();
       return view("crud",$data);
    }

    public function create()
    {
        return view("add");
    }

    public function store(Request $request)
    {
        $name = $request->input("name");
        $age = $request->input("age");

        $friendsModel = new friendsModel();

        $friendsModel->f_name = $name;
        $friendsModel->f_age = $age;

        $friendsModel->save();
        return Redirect::to("/friends");
    }

    public function show(string $id)
    {
        $f_data = friendsModel::find($id);
        $friends = friendsModel::all();

        if($f_data === null){
            return Redirect::to("/friends");
        }else{
            return view("read",compact("f_data"));
        }
    }

    public function edit(string $id)
    {
        $f_data = friendsModel::find($id);
        $friends = friendsModel::all();

        if($f_data === null){
            return Redirect::to("/friends");
        }else{
            return view("update",compact("f_data"));
        }
    }

    public function update(Request $request, string $id)
    {
        $name = $request -> input("name");
        $age = $request -> input("age");

        $friendsModelId = friendsModel::find($id);

        $friendsModelId -> f_name = $name;
        $friendsModelId -> f_age = $age;

        $friendsModelId -> save();

        return Redirect::to("/friends");
    }

    public function destroy(string $id)
    {
        $friendsModelId = friendsModel::find($id);

        $friendsModelId -> delete();

        return Redirect::to("/friends");
    }
}