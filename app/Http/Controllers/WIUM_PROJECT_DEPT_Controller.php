<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WIUM_PROJECT_DEPT_Controller extends Controller
{
    private function WIUM_DEPT_SET() {
        $WIUM_DEPT = [
            ['link' => '#', 'dept' => 'WEST INDONESIA UNION MISSION', 'kode' => 'A90-UIKB'],
            ['link' => '#', 'dept' => 'NORTH SUMATRA MISSION', 'kode' => 'A10-DSKU'],
            ['link' => '#', 'dept' => 'UNIVERSITAS SURYA NUSANTARA', 'kode' => 'C12-USN'],
        ];
    
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
    
}
