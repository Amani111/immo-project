<?php

use Illuminate\Database\Seeder;
use App\Govliste;


class GovlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Govliste::create([
            'name' => 'Ariana',
        ]);
        Govliste::create([
            'name' => 'Béja',
        ]);
        Govliste::create([
            'name' => 'Ben Arous',
        ]);
        Govliste::create([
            'name' => 'Bizerte',
        ]);
        Govliste::create([
            'name' => 'Gabès',
        ]);
        Govliste::create([
            'name' => 'Gafsa',
        ]);
        Govliste::create([
            'name' => 'Jendouba',
        ]);
        Govliste::create([
            'name' => 'Kairouan',
        ]);
        Govliste::create([
            'name' => 'Kasserine',
        ]);
        Govliste::create([
            'name' => 'Kébili',
        ]);
        Govliste::create([
            'name' => 'Le Kef',
        ]);
        Govliste::create([
            'name' => 'Mahdia',
        ]);
        Govliste::create([
            'name' => 'La Manouba',
        ]);
        Govliste::create([
            'name' => 'Médenine',
        ]);
        Govliste::create([
            'name' => 'Monastir',
        ]);
        Govliste::create([
            'name' => 'Nabeul',
        ]);
        Govliste::create([
            'name' => 'Sfax',
        ]);
        Govliste::create([
            'name' => 'Sidi Bouzid',
        ]);
        Govliste::create([
            'name' => 'Siliana',
        ]);
        Govliste::create([
            'name' => 'Sousse',
        ]);
        Govliste::create([
            'name' => 'Tataouine',
        ]);
        Govliste::create([
            'name' => 'Tozeur',
        ]);
        Govliste::create([
            'name' => 'Tunis',
        ]);
        Govliste::create([
            'name' => 'Zaghouan',
        ]);

    }
}
