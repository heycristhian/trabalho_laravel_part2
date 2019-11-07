<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Year;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $year = new Year;
        $year->description = 'First';
        $year->save();

        $year = new Year;
        $year->description = 'Second';
        $year->save();

        $year = new Year;
        $year->description = 'Third';
        $year->save();

        DB::table('users')->insert([
            'name' => 'Cristhian Dias',
            'email' => 'heycristhian@gmail.com',
            'password' => bcrypt('crisdias'),
        ]);
    }
}
