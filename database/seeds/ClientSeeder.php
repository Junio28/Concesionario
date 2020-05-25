<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Client::class, 30)->create();
        
        factory(App\Models\Client::class)->create([
            'name' => 'Alfredo Enrique',
            'last_name' => 'Ortega Marquez',
            'address' => 'San Andres',
            'date' => now(),
            'email' => 'aortega@correo.com',
        ]);
    }
}
