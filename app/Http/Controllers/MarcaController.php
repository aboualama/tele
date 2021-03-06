<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Marca;
use Storage;

class MarcaController extends Controller
{
 
  

    public function index(Request $request)
    { 
        $records = Marca::all();
        return view('marca.index', ['records' => $records]);
    } 
  

    public function create(Request $request)
    {  
        return view('marca.create');
    }  
    
 
    public function store(Request $request)
    {  
        // dd($request->hasFile('img'));

        $record = new Marca(); 
        $record->title  =$request->title; 

        if (request()->hasFile('img')) 
            {  
                $public_path = 'uploads/marca';
                $img_name = request('title')->getClientOriginalExtension();
                request('img')->move($public_path , $img_name); 
            }
        else
            { 
                $img_name = 'default.png';  
            } 

        $record->img  =$img_name; 
        $record->save(); 
        return Resp::success($record);
    }

 
    public function edit(Marca $marca)
    {
        return view('marca.edit' , compact('marca')); 
    } 
 
 
    public function update(Request $request, Marca $marca)
    { 

        if (request()->hasFile('img')) 
        { 

            if($marca->img !==  'default.png')
                {
                    Storage::delete('marca/'.$marca->img);    
                }
            $public_path = 'uploads/marca';
            $img_name = request('title')->getClientOriginalExtension();
            request('img')->move($public_path , $img_name); 

            $marca->img  =  $img_name; 
        } 

        $marca->update($request->all());    
        return Resp::success($marca);
    }

 
    public function destroy(Marca $marca)
    {
        $marca->delete();
        return Resp::success($marca);
    }   
}





    // public function marcastore(Request $request)
    // { 
    //     $data = $request->all(); 
    //     $validator = validator()->make($data, [ 
    //         'title'             => 'required|min:6',  
    //     ]);
 
    //     if ($validator->fails()) 
    //     {
    //         return responsejson(0 , $validator->errors()->first() , $validator->errors()); 
    //     } 
    //     $record = Marca::create($data);   
    //     return responsejson(1 , 'success' , $record );  
  
    // }