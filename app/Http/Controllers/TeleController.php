<?php

namespace App\Http\Controllers;

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
        $marcas = Marca::all();  
        $modellos = Modello::all(); 
        return view('tele.create' , compact('modellos', 'marcas')); 
    }   
  
    public function store(Request $request)
    {  
        $record = new Telefono(); 
        $record->modello_id =$request->modello; 
        $record->q1         =$request->q1; 
        $record->q2         =$request->q2; 
        $record->q3         =$request->q3; 
        $record->prezzo     =$request->prezzo; 
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
        $marcas = Marca::all(); 
        $modellos = Modello::all(); 
        return view('tele.edit' , compact('telefono', 'modellos', 'marcas')); 
    } 
 

    public function update(Request $request, Telefono $telefono)
    {
          
        $telefono->modello_id =$request->modello; 
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

    // public function telefono(Request $request)
    // { 
    //      $record = Telefono::where(function($query) use($request)
    //         { 
 
    //             if($request->has('id_modello')) 
    //             {
    //                 $query->where('id_modello' , $request->id_modello);
    //             }  
    //             if($request->has('q1')) 
    //             {
    //                 $query->where('q1' , $request->q1);
    //             }
    //             if($request->has('q2')) 
    //             {
    //                 $query->where('q2' , $request->q2);
    //             }
    //             if($request->has('q3')) 
    //             {
    //                 $query->where('q3' , $request->q3);
    //             }
    //         })->first(); 

    //     return Resp::success($record);
    // } 
}
