<?php

namespace HishabKitab\View\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ViewDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
    }
}