<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Enum;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index()
    {
        //Load all the dish in the menu

        //TODO if user is admin, he can modify the menu

        $menu = Dish::all();





        return view('welcome',
        [
            'menu'=>$menu
        ]);

    }


    public function show(){

        $this->authorize('update',auth()->user());

        $menu = Dish::all();


            return view('edit_menu',
                [
                    'menu' => $menu
                ]);


    }



    public function destroy($id){


        $this->authorize('update',auth()->user());

        Dish::where('id',$id)->delete();


        return redirect('/modifica-menu')->with('success', 'Data updated');


    }

    public function update(){

    }


    public function store()
    {

        // Validate and store a new dish


    }


    public function validator()
    {


        return request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'Italian_description' => ['string', 'max:600'],
            'English_description' => ['required', 'string', 'min:5', 'max:600'],
            'German_description' => ['required', 'string', 'min:5', 'max:600'],
            'price' => ['integer', 'required', 'between:0,100'],
            'type' => ['integer', 'required', 'between:0,8'],
        ]);


    }





}
