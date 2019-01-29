<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MarcaController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(Request $request)
    {
        // dd($request);
        $records = Marca::all();

        return view('marca.index', ['records' => $records]);
    }

    public function create(Request $request)
    {
        return view('marca.create');
    }

    public function store(Request $request)
    {
        $record        = new Marca();
        $record->title = $request->title;

        if (request()->hasFile('file')) {

            $public_path = 'uploads/marca';
            $img_name    = request('title').time().'.'.request('file')->getClientOriginalExtension();
            request('file')->move($public_path, $img_name);
        } else {
            $img_name = 'default.png';
        }
        $record->img = $img_name;
        //$record->img = $record->title;
        $record->save();

        return Resp::success($record);
    }

    public function edit(Marca $marca)
    {
        return view('marca.edit', compact('marca'));
    }

    public function update(Request $request, Marca $marca)
    {  
        if (request()->hasFile('file')) {

            if ($marca->img !== 'default.png') {
                Storage::delete('marca/'.$marca->img);
            }

            $public_path = 'uploads/marca';
            $img_name    = request('title') . time() . '.' . request('file')->getClientOriginalExtension();
            request('file')->move($public_path, $img_name);

            $marca->img = $img_name;
        }

        $marca->update($request->all());

        return Resp::success($marca);
    }


    public function destroy(Marca $marca)
    {
        if ($marca->img !== 'default.png') {
            Storage::delete('marca/'.$marca->img);
        } 
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
