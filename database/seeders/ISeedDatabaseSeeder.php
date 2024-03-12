<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ISeedDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            IseedDataTypesTableSeeder::class,
            IseedDataRowsTableSeeder::class,
            IseedMenusTableSeeder::class,
            IseedMenuItemsTableSeeder::class,
            IseedRolesTableSeeder::class,
            IseedPermissionsTableSeeder::class,
            IseedPermissionRoleTableSeeder::class,
            IseedSettingsTableSeeder::class,
        ]);
    }
}
