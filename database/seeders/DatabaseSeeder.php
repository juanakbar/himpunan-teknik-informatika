<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $roles = [
            [
                'name' => 'super-admin',

            ],
            [
                'name' => 'admin',

            ],
            [
                'name' => 'user',

            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }

        $perms = [
            [
                'name' => 'All Access',
            ],

            [
                'name' => 'Ketua Divisi',
            ],
            [
                'name' => 'Anggota',
            ],
        ];

        foreach ($perms as $perm) {
            \Spatie\Permission\Models\Permission::create($perm);
        }
        $superAdmin = \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@hmti.com',
        ]);
        $internal = \App\Models\User::factory()->create([
            'name' => 'Admin Divisi Internal',
            'email' => 'internal@hmti.com',
        ]);
        $user = \App\Models\User::factory()->create([
            'name' => 'Juan Akbar Indrian',
            'email' => 'juanindrian02@gmail.com',
        ]);

        $superAdmin->assignRole('super-admin');
        $internal->assignRole('admin');
        $user->assignRole('user');

        $superAdmin->givePermissionTo('All Access');
        $internal->givePermissionTo('Ketua Divisi');
        $user->givePermissionTo('Anggota');
    }
}
