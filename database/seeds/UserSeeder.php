<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           $user= User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('sebri123'),
            'active' => '1',
            'phone' => '123456789'
        ]);
        $role = Role::where('name', 'admin')->first();
		if ($role) {
			$user->assignRole([$role->id]); 
		}

       

    }
}
