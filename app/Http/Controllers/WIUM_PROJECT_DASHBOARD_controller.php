<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WIUM_PROJECT_DASHBOARD_controller extends Controller
{
    public function index(){
        if(session("nama") && session("kode_wilayah")){
            return view("WIUM_PROJECT_TEMPLATE", ["nama"=> session("nama")]);
        }else{
            return view("WIUM_PROJECT_LOGIN");
        }
    }
}
