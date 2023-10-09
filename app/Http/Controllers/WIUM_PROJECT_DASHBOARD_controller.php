<?php

namespace App\Http\Controllers;

use App\Models\departement;
use Illuminate\Http\Request;

class WIUM_PROJECT_DASHBOARD_controller extends Controller
{
    public function index(){
        if(session("nama") && session("kode_wilayah")){
            return view("Dashboard/WIUM_PROJECT_DASH", ["nama"=> session("nama"), "dept"=> $this->getDept()]);
        }else{
            return view("WIUM_PROJECT_LOGIN");
        }
    }

    private function getDept(){
        $dept =  departement::all(['name', 'code', 'address']);

        return $dept;
    }
}
