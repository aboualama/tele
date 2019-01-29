<?php

namespace App\Http\Controllers;

use App\Marca;
use App\Modello;
use Illuminate\Http\Request;
use Storage;

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
        return view('modello.create', compact('marcas'));
    }



    public function store(Request $request)
    {
        $record           = new Modello();
        $record->title    = $request->title; 
        $record->marca_id = $request->marca;
        $record->gb       = 0;

            if (request()->hasFile('file')) 
                { 
                    $public_path = 'uploads/modello';
                    $img_name    = request('title') . time() . '.' . request('file')->getClientOriginalExtension();
                    request('file')->move($public_path, $img_name);
                } else 
                {
                    $img_name = 'default.png';
                }

        $record->img = $img_name;
        $record->save(); 
        return Resp::success($record);
    }



    public function show($id)
    {
        $marcas = Modello::has('telefonos')->with('telefonos')->where('marca_id', '=', $id)->get(); 
        return view('modello.show', compact('marcas'));
    }



    public function edit(Modello $modello)
    {
        $marcas = Marca::all(); 
        return view('modello.edit', compact('modello', 'marcas'));
    }



    public function update(Request $request, Modello $modello)
    {  
        if (request()->hasFile('file')) {

            if ($modello->img !== 'default.png') 
                {
                    Storage::delete('modello/'.$modello->img);
                }

            $public_path = 'uploads/modello';
            $img_name    = request('title') . time() . '.' . request('file')->getClientOriginalExtension();
            request('file')->move($public_path, $img_name);

            $modello->img = $img_name;
        }
 
        $modello->title    = $_POST['title']; 
        $modello->marca_id = $_POST['marca'];
        $modello->save(); 
        return Resp::success($modello);
    }




    public function destroy(Modello $modello)
    { 
        if ($modello->img !== 'default.png') 
            {
                Storage::delete('modello/'.$modello->img);
            }
        $modello->delete(); 
        return Resp::success($modello);
    }
}
