<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Marca;
use App\Modello;

class ModelloController extends Controller
{
 
  

    public function index(Request $request)
    { 
        $records = Modello::all();
        return view('modello.index', ['records' => $records]);
    } 
  

    public function create(Request $request)
    {  
        $marcas = Marca::all(); 
        return view('modello.create' , compact('marcas')); 
    }  
    

    public function store(Request $request)
    {
        $record = new Modello(); 
        $record->title    =$request->title; 
        $record->gb       =$request->gb; 
        $record->marca_id =$request->marca; 
        $record->save(); 
        return Resp::success($record);
    }

 
    public function edit(Modello $modello)
    {
        $marcas = Marca::all(); 
        return view('modello.edit' , compact('modello', 'marcas')); 
    } 
 
 
    public function update(Request $request, Modello $modello)
    {  
       $modello->title    = $_POST['title'];
       $modello->gb       = $_POST['gb'];
       $modello->marca_id = $_POST['marca'];
       $modello->save(); 
       return Resp::success($modello);
    }

 
    public function destroy(Modello $modello)
    {
        $modello->delete();
        return Resp::success($modello);
    }   
}
