<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class userController extends Controller
{
    //
    public function index()
    {
        $eventdata = User::orderby('id')
        ->get()
        ->toArray();
        return response()->json($eventdata);

    }

    public function login(Request $request)
    {
        $passwordHash = md5($request->password);

        $eventdata = User::where('email', $request->email)->where('password',$passwordHash)
            ->get()
            ->toArray();
            if(count($eventdata) >=1){
                return response(true);
            }else{
                return response(false);
            }
    }


public function show($id)
{
    $eventdata = User::where('id', $id)
    ->get()
    ->toArray();
    return response()->json($eventdata);
}

public function store(Request $request)
{
$hashpw = md5($request->onderdeel);

User::create([
        'name'=>$request->name,
        'password'=>$hashpw,
        'email'=>$request->email,
]);

//date("Y-m-d H:i:s");  timestamp sql current time

    return response()->json('event created');

}
public function delete(request $request, User $id){
    $id->delete();
}
public function update(request $request, User $id){
    User::where('id',$id)->update([
        'onderdeel'=>$request->onderdeel,
    ]
);
}
}
