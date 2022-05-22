<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'nama' => 'Reza Ardiansyah',
            'alamat' => 'Lembar',
            'jeniskelamin' => 'laki-laki',
            'notelepon' => '123456789100',
        ]);
    }
}
