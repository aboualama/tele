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

        // dd($marcas);
        return view('modello.create', compact('marcas'));
    }

    public function store(Request $request)
    {
        $record = new Modello();

        $record->title    = $request->title;
        $record->gb       = 16;
        $record->marca_id = $request->marca;

        if (request()->hasFile('img')) {
            $public_path = 'uploads/modello';
            $img_name    = request('title')->getClientOriginalExtension();
            request('img')->move($public_path, $img_name);
        } else {
            $img_name = 'default.png';
        }

        $record->img = $img_name;
        $record->save();

        return Resp::success($record);
    }

    public function edit(Modello $modello)
    {
        $marcas = Marca::all();

        return view('modello.edit', compact('modello', 'marcas'));
    }

    public function show($id)
    {
        // dd($id);
        $marcas = Modello::all();

//dd($marcas);
        return view('modello.show', compact('marcas'));
    }

    public function update(Request $request, Modello $modello)
    {

        if (request()->hasFile('img')) {

            if ($modello->img !== 'default.png') {
                Storage::delete('modello/'.$modello->img);
            }
            $public_path = 'uploads/modello';
            $img_name    = request('title')->getClientOriginalExtension();
            request('img')->move($public_path, $img_name);
            $modello->img = $img_name;
        }

        $modello->title    = $_POST['title'];
        $modello->gb       = $_POST['gb'];
        $modello->marca_id = $_POST['marca'];
        $modello->save();

        return Resp::success($modello);
    }

    public function destroy(Modello $modello)
    {

        if ($modello->img !== 'default.png') {
            Storage::delete('modello/'.$modello->img);
        }
        $modello->delete();

        return Resp::success($modello);
    }
}
