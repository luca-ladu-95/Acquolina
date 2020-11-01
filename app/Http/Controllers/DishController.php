<?php

namespace App\Http\Controllers;

use App\Models\Dish;

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


    public function create(){

        $this->authorize('update',auth()->user());

        $attributes = $this->validator();

        $dish = New Dish($attributes);

        $dish->save();

        return redirect(route('new_item'))->with(['message'=>'Elemento eliminato correttamente']);


    }



    public function destroy(Dish $dish){

        $this->authorize('update',auth()->user());


        $dish->delete();

        return redirect('/modifica-menu')->with(['message'=>'Elemento eliminato correttamente']);

    }

    public function update(Dish $dish){

        $this->authorize('update',auth()->user());

        return view('edit_dish',[
            'dish'=> $dish
            ]);

    }


    public function store(Dish $dish)
    {
        $this->authorize('update',auth()->user());
        $attributes=$this->validator();
        $dish->update($attributes);

        return redirect(route('edit_dish', $dish));
    }


    public function validator()
    {


        return request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'Italian_description' => ['string', 'max:600'],
            'English_description' => ['required', 'string', 'min:5', 'max:600'],
            'German_description' => ['required', 'string', 'min:5', 'max:600'],
            'price' => ['integer', 'required', 'between:0,100'],
            'type' => ['integer', 'required', 'between:0,15'],
        ]);


    }





}
