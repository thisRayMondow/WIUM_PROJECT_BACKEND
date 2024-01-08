<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('departements', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("kode_wilayah");
            $table->string("address");
            $table->timestamps();
            $table->timestamp('delete_at')->nullable();
        });

        DB::table('departements')->insert([
            'name' => 'WEST INDONESIA UNION MISSION',
            'kode_wilayah' => 'A90-UIKB',
            'address' => 'Gedung Pertemuan Advent, Jl.Letjen MT Haryono Blok A kav. 4-5 Tebet Barat, Tebet Jakarta Selatan'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departements');
    }
};
