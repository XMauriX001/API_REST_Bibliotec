<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class add_Books extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert(
            [
                'title' => 'Don Quijote de la Mancha',
                'description' => 'Aventuras de un caballero loco',
                'ISBN' => 9788424115531,
                'copias_totales' => 5,
                'copias_disponibles' => 5,
                'disponible' => true,
            ],
            [
                'title' => 'Cien años de soledad',
                'description' => 'Historia de la familia Buendía',
                'ISBN' => 780307350435,
                'copias_totales' => 3,
                'copias_disponibles' => 3,
                'disponible' => true,
            ],
            [
                'title' => 'Orgullo y Prejuicio',
                'description' => 'Novela de costumbres y amor',
                'ISBN' => 9788467040418,
                'copias_totales' => 4,
                'copias_disponibles' => 4,
                'disponible' => true,
            ],
            [
                'title' => 'Crimen y Castigo',
                'description' => 'Dilemas morales y justicia',
                'ISBN' => 9788420651330,
                'copias_totales' => 2,
                'copias_disponibles' => 2,
                'disponible' => true,
            ],
            [
                'title' => 'El Principito',
                'description' => 'Relato corto sobre la vida',
                'ISBN' => 9780156013987,
                'copias_totales' => 10,
                'copias_disponibles' => 10,
                'disponible' => true,
            ],
            [
                'title' => '1984',
                'description' => 'Distopía política y vigilancia',
                'ISBN' => 9788466332514,
                'copias_totales' => 6,
                'copias_disponibles' => 6,
                'disponible' => true,
            ],
            [
                'title' => 'La Odisea',
                'description' => 'Viaje épico de Ulises',
                'ISBN' => 9788424924515,
                'copias_totales' => 3,
                'copias_disponibles' => 3,
                'disponible' => true,
            ]
        );
    }
}
