<?php

use DragonCode\LaravelActions\Support\Actionable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class SetAdmin extends Actionable
{
    /**
     * Run the actions.
     *
     * @return void
     */
    public function up(): void
    {
        DB::table('users')->insert([
            'name' => 'hokage',
            'email' => 'naruto@gmail.com',
            'password' => Hash::make('admin'),
            'role' => 1
        ]);
    }

    /**
     * Reverse the actions.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
