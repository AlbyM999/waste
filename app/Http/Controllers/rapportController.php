<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rapport;

class rapportController extends Controller
{

    public function index()
    {
        $eventdata = rapport::orderby('id')
        ->get()
        ->toArray();
        return response()->json($eventdata);

    }


public function show($id)
{
    $eventdata = rapport::where('id', $id)
    ->get()
    ->toArray();
    return response()->json($eventdata);
}

public function store(Request $request)
{
$hashpw = md5($request->naam);

rapport::create([
        'inkoop'=>$request->inkoop,
        'werkvoorraad'=>$request->werkvoorraad,
        'date'=>$request->date,

    ]);

    return response()->json('event created');

}
public function delete(request $request, rapport $id){
    $id->delete();
}
public function update(request $request, rapport $id){
    rapport::where('id',$id)->update([
        'date'=>$request->date,
    ]
);
}
}
