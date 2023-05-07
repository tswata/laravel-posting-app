<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i = 9; $i <= 12; $i++)
        // { 
        //     $param = ['title' => $i . '日目', 'content' => 'その' . $i,];
        //     DB::table('posts') -> insert($param);
        // }

        $keys = ['13日目', '14日目'];
        $values = ['できる', 'できない'];
        for ($i = 0; $i <= 1; $i++){
            $param = ['title' => $keys[$i], 'content' => $values[$i]];
            DB::table('posts') -> insert($param);
        }
         
        
    } 
}