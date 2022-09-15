<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\onderdeel;

class onderdeelController extends Controller
{

    public function index()
    {
        $eventdata = onderdeel::orderby('id')
        ->get()
        ->toArray();
        return response()->json($eventdata);

    }


public function show($id)
{
    $eventdata = onderdeel::where('id', $id)
    ->get()
    ->toArray();
    return response()->json($eventdata);
}

public function store(Request $request)
{
$hashpw = md5($request->naam);

onderdeel::create([
        'naam'=>$request->naam,
        'omschrijving'=>$request->omschrijving,
        'prijs kg'=>$request->prijs,
        'voorraad'=>$request->voorraad


]);

    return response()->json('event created');

}
public function delete(request $request, onderdeel $id){
    $id->delete();
}
public function update(request $request, onderdeel $id){
    onderdeel::where('id',$id)->update([
        'naam'=>$request->naam,
    ]
);
}
}
