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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('kode_wilayah');
            $table->string('kode');
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('delete_at')->nullable();
        });

        DB::table('users')->insert([
            'name' => 'ADMIN',
            'email' => 'ADMIN@MAIL.COM',
            'kode' => '+1',
            'password' => md5("+1"),
            'kode_wilayah' => '-1',
        ]);
        DB::table('users')->insert([
            'name' => 'LOCAL',
            'email' => 'LOCAL@MAIL.COM',
            'kode' => '777',
            'password' => md5("777"),
            'kode_wilayah' => '-1',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
