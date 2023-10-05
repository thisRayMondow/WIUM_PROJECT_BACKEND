<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class WIUM_PROJECT_LOGIN_Controller extends Controller
{
    public function LOGIN(){
        if(session("nama")){
            return redirect()->route('dashboard');
        }else{
            return view("WIUM_PROJECT_LOGIN");
        }
    }

    public function credential(Request $request){
        if (strpos($request->username, '+') !== false) {
            $data = User::where("kode", $request->username)->get(["password", "name", "kode_wilayah"]);
            foreach ($data as $key => $value) {
                if($value->password==md5($request->password)){
                    session([
                        'nama' => $value->name,
                        "kode_wilayah"=> $value->kode_wilayah
                    ]);
                    session()->save();
                    return redirect()->route('dashboard');
                }else{
                    return redirect()->route('login')
                    ->with('fail', 'Kode dan PIN Tidak Sesuai');
                }
            }
        }else {
            return redirect()->route('login')
                    ->with('fail', 'Kode dan PIN Tidak Sesuai');
        }

        if (session("nama")==null) {
            return redirect()->route('login')
                ->with('fail', 'Kode dan PIN Tidak Sesuai');
        }
    }

    public function LOGOUT(){
        session()->flush();
        session()->save();
        return redirect()->route('login');       
    }
}
