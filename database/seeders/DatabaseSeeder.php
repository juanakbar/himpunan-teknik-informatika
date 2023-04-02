<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\KWSB;
use Illuminate\Support\Str;
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


        $kwsb = [
            [
                'name' => $name = 'Ketua Himpunan',
                'slug' => Str::slug($name . Str::random(6))
            ],
            [
                'name' => $name = 'Wakil Ketua Himpunan',
                'slug' => Str::slug($name . Str::random(6))
            ],
            [
                'name' => $name = 'Sekretaris 1',
                'slug' => Str::slug($name . Str::random(6))
            ],
            [
                'name' => $name = 'Sekretaris 2',
                'slug' => Str::slug($name . Str::random(6))
            ],
            [
                'name' => $name = 'Bendaraha 1',
                'slug' => Str::slug($name . Str::random(6))
            ],
            [
                'name' => $name = 'Bendaraha 2',
                'slug' => Str::slug($name . Str::random(6))
            ],
        ];

        foreach ($kwsb as $item) {
            KWSB::create($item);
        }
    }
}
