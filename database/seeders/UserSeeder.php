<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use PhpOffice\PhpSpreadsheet\Calculation\LookupRef\Unique;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama'              => 'Admin Webite',
            'email'             => 'admin@klobur.com',
            'email_verified_at' => now(),
            'password'          => bcrypt('desaklobur'),
        ]);
    }
}
