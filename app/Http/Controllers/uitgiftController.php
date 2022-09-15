<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uitgift;

class uitgiftController extends Controller
{

    public function index()
    {
        $eventdata = uitgift::orderby('id')
        ->get()
        ->toArray();
        return response()->json($eventdata);

    }


public function show($id)
{
    $eventdata = uitgift::where('id', $id)
    ->get()
    ->toArray();
    return response()->json($eventdata);
}

public function store(Request $request)
{
$hashpw = md5($request->onderdeel);

uitgift::create([
        'onderdeel'=>$request->onderdeel,
        'tijdstip'=>$request->tijdstip,
        'gewicht'=>$request->gewicht,
        'prijs'=>$request->prijs,
]);

//date("Y-m-d H:i:s");  timestamp sql current time

    return response()->json('event created');

}
public function delete(request $request, uitgift $id){
    $id->delete();
}
public function update(request $request, uitgift $id){
    uitgift::where('id',$id)->update([
        'onderdeel'=>$request->onderdeel,
    ]
);
}
}
