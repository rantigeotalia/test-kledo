<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $references = [
            ['id' => 1, 'code' => 'overtime_method', 'name' => 'Salary / 173', 'expression' => '(salary / 173) * overtime_duration_total'],
            ['id' => 2, 'code' => 'overtime_method', 'name' => 'Fixed', 'expression' => '10000 * overtime_duration_total']
        ];

        DB::table('references')->insert($references);
    }
}
