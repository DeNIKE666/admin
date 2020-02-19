<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $roles = ['admin', 'GlAdmin' , 'investor'];

       $permissions = [
           'plans',
           'roles',
           'permissions',
           'users',
       ];

        foreach ($roles as $role)
        {
            factory(\Spatie\Permission\Models\Role::class)->create([
                'name' => $role,
            ]);
        }

        foreach ($permissions as $permission)
        {
            factory(\Spatie\Permission\Models\Permission::class)->create([
                'name' => $permission,
            ]);
        }
    }
}
