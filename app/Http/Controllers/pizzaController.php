<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pizza;
class pizzaController extends Controller
{
   
        public function index(){
   
        $pizzas = pizza::paginate(2);
        return view('pizzas',[
            'pizzas'=>$pizzas,
        ]);

    }

    public function show($id){

        $pizza = pizza::findOrFail($id);
        return view('show',['pizza'=>$pizza]);
    }
    public function create(){
      
        return view('create');
    }
    public function store(){
        $data= request()->validate([
            'name' => 'required|max:5',
        ]);
        $pizza = new pizza();

        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->name = request('name');
        if (request()->file('image'))
        
        {
            $file= request()->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/highlights', $filename);
            $pizza->image=$filename;
        }
        else{
           return request();
         $pizza->image='';
        }
        $pizza->save();
        return redirect('/')->with('mssg', "Thanks for your order");
    }

    public function destroy($id){

        $pizza= Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas');
    }
}
