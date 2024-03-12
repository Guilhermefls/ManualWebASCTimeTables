<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IseedRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2024-01-28 05:35:48',
                'updated_at' => '2024-01-28 05:35:48',
            ),
        ));
        
        
    }
}