<?php

namespace App\Http\Controllers;

use App\Gb;
use Illuminate\Http\Request;
use App\Telefono; 
use App\Modello;
use App\Marca;
use Response;

class TeleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $records = Telefono::paginate(10);
        return view('tele.index', ['records' => $records]);
    }

    public function create(Request $request)
    {
        $marcas   = Marca::all();
        $modellos = Modello::all();
        return view('tele.create' , compact('modellos', 'marcas'));
    }

    public function store(Request $request)
    {
        $record = new Telefono();
        $record->modello_id =$request->modello;

        $record->q1     =$request->q1;
        $record->q1_2   = $request->q1_2;
        $record->q1_3   = $request->q1_3;
        $record->q2     = $request->q2;
        $record->q3     =$request->q3;
        $record->prezzo = 1;
        $record->save();
        foreach ($_POST['gb'] as $gb) {
            $newGb              = new Gb();
            $newGb->gb          = $gb['gb'];
            $newGb->price       = $gb['prezzo'];
            $newGb->telefono_id = $record->id;
            $newGb->save();
        }

        return Resp::success($record);
    }

    public function show($id)
    {
        $record = Telefono::findOrFail($id);
        dd($record->toArray());

        return Resp::success($record);
    }

    public function edit(Telefono $telefono)
    {
        $marcas   = Marca::all();
        $modellos = Modello::all();

        return view('tele.edit' , compact('telefono', 'modellos', 'marcas'));
    }

    public function update(Request $request, Telefono $telefono)
    {

        $telefono->modello_id =$request->modello;
        $telefono->gb         =$request->gb;
        $telefono->q1         =$request->q1;
        $telefono->q2         =$request->q2;
        $telefono->q3         =$request->q3;
        $telefono->prezzo     =$request->prezzo;
        $telefono->save();

        return Resp::success($telefono);
    }

    public function destroy(Telefono $telefono)
    {
        $telefono->delete();

        return Resp::success($telefono);
    }

    public function getmodello()
    {
        $modello = Modello::where('marca_id', $_POST['marca'])->get();

        return Response::json($modello);
    }

    public function getmodellogb()
    {
        $modello = Modello::where('id', $_POST['modello'])->get();

        return Response::json($modello);
    }

    public function search(Request $request)
    {
        $marcas = Marca::all();

        return view('tele.telefono' , compact('marcas'));
    }

    public function telefono(Request $request)
    {

        $record = Telefono::find($request->modello);
        dd($record);

            $q1 = ($request->q1 === 'No') ? 0 : $record->q1;
            $q2 = ($request->q2 === 'No') ? 0 : $record->q2;
            $q3 = ($request->q3 === 'No') ? 0 : $record->q3;
        $prezzo = $record->prezzo - $q1 - $q2 - $q3;
        dd($prezzo);

            return Resp::success($prezzo);
    }
}
