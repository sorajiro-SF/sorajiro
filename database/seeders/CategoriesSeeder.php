<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $study=[
            'name'=>'勉強',
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime(),
        ];
        DB::table('categories')->insert($study);

        $hobby=[
            'name'=>'趣味',
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime(),
        ];
        DB::table('categories')->insert($hobby);

        $work=[
            'name'=>'仕事',
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime(),
        ];
        DB::table('categories')->insert($work);

    }
}
