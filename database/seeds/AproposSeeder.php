<?php

use Illuminate\Database\Seeder;
use App\Apropos;

class AproposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Apropos::create([
            'titre1' => 'BIENVENUE À TUNIMEUBLE',
            'titre2' => 'VOULEZ-VOUS ETRE UN PARTENAIRE DE TUNIMEUBLE ?',
            'titre3' => 'NOTRE VISION',
            'titre4' => 'NOTRE MISSION',
            'titre5' => 'NOTRE OBJECTIF',
            'image1' => 'image1.jpg',
            'image2' => 'image2.jpg',
            'image3' => 'image3.jpeg',
            'image4' => 'image4.jpg',
            'description1' => 'FURNILIFE provide how all this mistaken idea of denouncing pleasure and sing pain was born an will give you a complete account of the system, and expound the actual teachings of the eat explorer of the truth, the mer of human.',
            'description2' =>'FURNILIFE provide how all this mistaken idea of denouncing pleasure and sing pain was born an will give you a complete account of the system, and expound the actual teachings of the eat explorer of the truth, the mer of human.',
            'description3' => 'FURNILIFE provide how all this mistaken idea of denouncing pleasure and sing pain was born an will give you a ete account of the system, and expound the actual teangs the eat explorer of the truth, the mer of human tas assumenda est, omnis dolor repellend',
            'description4' =>'FURNILIFE provide how all this mistaken idea of denouncing pleasure and sing pain was born an will give you a ete account of the system, and expound the actual teangs the eat explorer of the truth, the mer of human tas assumenda est, omnis dolor repellend',
            'description5' =>'FURNILIFE provide how all this mistaken idea of denouncing pleasure and sing pain was born an will give you a ete account of the system, and expound the actual teangs the eat explorer of the truth, the mer of human tas assumenda est, omnis dolor repellend',
        ]);
    }
}
