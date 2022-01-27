<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposSeeder extends Seeder
{
    static $tipos = [
        'Gerente',
        'Supervisor',
        'Empleado'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach (self::$tipos as $tipo) {
            DB::table('tipo_usuario')->insert([
                'tipo_usuario' => $tipo
            ]);
        }
    }
}
