<?php

namespace App\Http\Controllers;

use App\Models\departement;
use Illuminate\Http\Request;

class WIUM_PROJECT_DEPT_Controller extends Controller
{
    private function WIUM_DEPT_SET() {
        $dept = departement::all(['name','kode_wilayah']);
        
        foreach ($dept as $key => $value) {
            $WIUM_DEPT[] =['link' => '#', 'dept' => $value->name, 'kode' => $value->kode_wilayah];
        }    
        return $WIUM_DEPT;
    }

    public function MAIN(){
        return response()->json($this->WIUM_DEPT_SET());
        
        // $data = $this->WIUM_DEPT_SET();
        // foreach ($data as $key => $value) {
        //     if ($key == 0) { // Ini akan memilih data dengan indeks 1 (indeks kedua dalam array)
        //         $selectedData = $value;
        //         break; // Keluar dari loop setelah menemukan data yang diinginkan
        //     }
        // }
        // dd($this->WIUM_DEPT_SET()[1]);
        
    }

    public function ADD(Request $request){
        $request->validate([
            'dept' => 'required|string',
            'kodeDept' => 'required|string',
            'alamat' => 'required|string',
        ]);

        $addDataDept = new departement();
        $addDataDept->name = $request->dept;
        $addDataDept->kode_wilayah = $request->kodeDept;
        $addDataDept->address = $request->alamat;
        $addDataDept->save();

        return redirect()->route('dashboard');
            
    }
    
}
