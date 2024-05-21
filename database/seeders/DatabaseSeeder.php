<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ProductCategorySeeder::class);
        $this->call(ProductTypeSeeder::class);
        $this->call(RolesPermissionSeeder::class);

        $admin = User::updateOrCreate([
            'email' => 'admin@orionpvt.com',
        ], [
            'name' => 'Admin Orion',
            'password' => 'OrionAdmin123$#',
        ]);

        $admin->assignRole('admin');
    }


}
