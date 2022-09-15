<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\onderhoud;

class onderhoudController extends Controller
{

    public function index()
    {
        $eventdata = onderhoud::orderby('id')
        ->get()
        ->toArray();
        return response()->json($eventdata);

    }


public function show($id)
{
    $eventdata = onderhoud::where('id', $id)
    ->get()
    ->toArray();
    return response()->json($eventdata);
}

public function store(Request $request)
{
$hashpw = md5($request->naam);

onderhoud::create([
        'naam'=>$request->naam,
        'omschrijving'=>$request->omschrijving,
        'vergoeding'=>$request->vergoeding,
        'apparaatid'=>$request->apparaatid



]);

    return response()->json('event created');

}
public function delete(request $request, onderhoud $id){
    $id->delete();
}
public function update(request $request, onderhoud $id){
    onderhoud::where('id',$id)->update([
        'naam'=>$request->naam,
    ]
);
}
}
