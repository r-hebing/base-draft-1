<?php

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
        $this->call(UserSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(SocialAccountSeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(PermissionSeeder::class);
    }
}