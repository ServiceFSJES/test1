<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = "Admin";
        $role_admin->description = "Administrateur";
        $role_admin->save();

        $role_operateur= new Role();
        $role_operateur->name = "Operateur";
        $role_operateur->description = "Opérateur";
        $role_operateur->save();

        $role_responsable = new Role();
        $role_responsable->name = "responsable";
        $role_responsable->description = "responsable";
        $role_responsable->save();


    }
}
