<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Table_kind;

class TableKindSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Table_kind::create(['table_kind'=>'Kitchen table']);
        Table_kind::create(['table_kind'=>'Dinner table']);
        Table_kind::create(['table_kind'=>'Coffee table']);
    }
}
