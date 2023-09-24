<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Permiso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::create(['name' => 'ADMINISTRADOR','email' => 'admin@test.com','password' => bcrypt('admin123Admin')]);

        $permiso1=Permiso::create(['nombre' => 'GESTION USUARIOS']);
        $permiso2=Permiso::create(['nombre' => 'GESTION DOCENTES']);
        $permiso3=Permiso::create(['nombre' => 'GESTION MATERIAS']);
        $permiso4=Permiso::create(['nombre' => 'ASIGNACION']);
        $permiso5=Permiso::create(['nombre' => 'ESTADISTICAS']);
        $permiso6=Permiso::create(['nombre' => 'IMPRESION']);
        $user->permisos()->attach([$permiso1->id, $permiso2->id, $permiso3->id, $permiso4->id, $permiso5->id, $permiso6->id]);

    }
}
