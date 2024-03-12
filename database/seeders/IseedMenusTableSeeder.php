<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IseedMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
        ));
        
        
    }
}