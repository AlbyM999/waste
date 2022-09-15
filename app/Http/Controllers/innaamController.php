<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\innaam;

class innaamController extends Controller
{

    public function index()
    {
        $eventdata = innaam::orderby('id')
        ->get()
        ->toArray();
        return response()->json($eventdata);

    }


public function show($id)
{
    $eventdata = innaam::where('id', $id)
    ->get()
    ->toArray();
    return response()->json($eventdata);
}

public function store(Request $request)
{
$hashpw = md5($request->apparaten);

innaam::create([
        'apparaten'=>$request->apparaten,
        'time'=>$request->time,



]);

    return response()->json('event created');

}
public function delete(request $request, innaam $id){
    $id->delete();
}
public function update(request $request, innaam $id){
    innaam::where('id',$id)->update([
        'apparaten'=>$request->apparaten,
    ]
);
}
}
