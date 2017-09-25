<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Default Seeders
        $this->call(Default_ConfigSeeder::class);
        $this->call(Default_RoleSeeder::class);
        $this->call(Default_UserSeeder::class);
        $this->call(Default_PermissionSeeder::class);
        $this->call(Default_RolePermissionSeeder::class);
        $this->call(Default_Syncs_TablesSeeder::class);
        $this->call(Default_CountriesSeeder::class);
        $this->call(Default_CitySeeder::class);
        $this->call(Default_TownshipSeeder::class);
        $this->call(Default_CoreSettingSeeder::class);
        $this->call(TestTableSeeder::class);
        $this->call(Default_RegistrationCategorySeeder::class);
        $this->call(Default_SponsorPackageTypeSeeder::class);

        $this->call(Default_PageSeeder::class);
        $this->call(Default_PostSeeder::class);
        $this->call(Default_EventSeeder::class);
        $this->call(Default_TemplateSeeder::class);


    }
}
