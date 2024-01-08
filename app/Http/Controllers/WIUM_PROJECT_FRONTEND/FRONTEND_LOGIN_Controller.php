<?php

namespace App\Http\Controllers\WIUM_PROJECT_FRONTEND;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class FRONTEND_LOGIN_Controller extends Controller
{
    public function LOGIN(Request $request){
        $data = User::where("name", $request->user)->get(["password", "kode", "kode_wilayah"]);
        foreach ($data as $key => $value) {
            if ($value->password==md5($request->password)) {
                $sendData = [
                    'status'=>'01',
                    'kode_wilayah'=> $value->kode_wilayah,
                    'access_token'=> Str::random(15)
                ];
                return response()->json($sendData);
            }else{
                return response()->json(['status'=>"00"]);
            }           
        }
        
        // return response()->json([$request->user, $request->password]);
    
        // if (auth()->attempt($credentials)) {
        //     $user = auth()->user();
        //     // Logika jika login berhasil
        //     return response()->json(['message' => 'Login berhasil', 'user' => $user]);
        // } else {
        //     // Logika jika login gagal
        //     return response()->json(['message' => 'Login gagal'], 401);
        // }
    }
}
