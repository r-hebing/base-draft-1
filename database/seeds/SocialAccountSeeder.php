<?php

use App\SocialAccount;
use Illuminate\Database\Seeder;

class SocialAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SocialAccount::class, 10)->create();
    }
}