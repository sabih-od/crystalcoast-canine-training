<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesAndPermissionSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(HomePageSeeder::class);
        $this->call(AboutPageSeeder::class);
        $this->call(ContactPageSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(GraduatePageSeeder::class);
        $this->call(FaqPageSeeder::class);
        $this->call(BlogPageSeeder::class);
    }
}
