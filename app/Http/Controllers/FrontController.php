<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Telefono;
use App\Modello;
use App\Marca;
use Response;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {

        $marcas = Marca::all();

        //  dd($marcas);
        return view('frontend.index', compact('marcas'));
    }

    public function create(Request $request)
    {
        $marcas   = Marca::all();
        $modellos = Modello::all();

        return view('tele.create', compact('modellos', 'marcas'));
    }

    public function store(Request $request)
    {
        $record = new Telefono();
        //   dd($request->all());
        $record->modello_id = $request->modello;
        $record->gb         = $request->gb;
        $record->q1         = $request->q1;
        $record->q2         = $request->q2;
        $record->q3         = $request->q3;
        $record->prezzo     = $request->prezzo;
        $record->save();

        return Resp::success($record);
    }

    public function show($id)
    {
        $record = Telefono::findOrFail($id);

        return Resp::success($record);
    }

    public function edit(Telefono $telefono)
    {
        $marcas   = Marca::all();
        $modellos = Modello::all();

        return view('tele.edit', compact('telefono', 'modellos', 'marcas'));
    }

    public function update(Request $request, Telefono $telefono)
    {

        $telefono->modello_id = $request->modello;
        $telefono->gb         = $request->gb;
        $telefono->q1         = $request->q1;
        $telefono->q2         = $request->q2;
        $telefono->q3         = $request->q3;
        $telefono->prezzo     = $request->prezzo;
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

        return view('tele.telefono', compact('marcas'));
    }

    public function telefono(Request $request)
    {

        $record = Telefono::where('modello_id', $request->modello)->first();

        $q1 = ($request->q1 === 'No') ? 0 : $record->q1;
        $q2 = ($request->q2 === 'No') ? 0 : $record->q2;
        $q3 = ($request->q3 === 'No') ? 0 : $record->q3;

        $prezzo = $record->prezzo - $q1 - $q2 - $q3;
        dd($prezzo);

        return Resp::success($prezzo);
    }
}
