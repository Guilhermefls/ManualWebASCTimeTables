<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(IseedDataTypesTableSeeder::class);
        $this->call(IseedDataRowsTableSeeder::class);
        $this->call(IseedMenusTableSeeder::class);
        $this->call(IseedMenuItemsTableSeeder::class);
        $this->call(IseedPermissionsTableSeeder::class);
        $this->call(IseedRolesTableSeeder::class);
        $this->call(IseedPermissionRoleTableSeeder::class);
        $this->call(IseedSettingsTableSeeder::class);
        $this->call([
	        // VoyagerDatabaseSeeder::class,
	        VoyagerDummyDatabaseSeeder::class,
		    ]);

    }
}
