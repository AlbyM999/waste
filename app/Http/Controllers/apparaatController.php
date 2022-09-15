<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\apparaat;

class apparaatController extends Controller
{

    public function index()
    {
        $eventdata = apparaat::orderby('id')
        ->get()
        ->toArray();
        return response()->json($eventdata);

    }


public function show($id)
{
    $eventdata = apparaat::where('id', $id)
    ->get()
    ->toArray();
    return response()->json($eventdata);
}

public function store(Request $request)
{
$hashpw = md5($request->naam);

    apparaat::create([
        'naam'=>$request->naam,
        'omschrijving'=>$request->omschrijving,
        'vergoeding'=>$request->vergoeding,
        'gewicht'=>$request->gewicht,
        'onderdelen'=>$request->onderdelen,

    ]);

    return response()->json('event created');

}
public function delete(request $request, apparaat $id){
    $id->delete();
}
public function update(request $request, apparaat $id){
    apparaat::where('id',$id)->update([
        'naam'=>$request->naam,
        'omschrijving'=>$request->omschrijving,
        'vergoeding'=>$request->vergoeding,
        'gewicht'=>$request->gewicht,
        'onderdelen'=>$request->onderdelen,
    ]
);
}
}
