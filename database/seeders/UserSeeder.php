<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();
        
        User::insert([
            'name' => 'Lanang Purbhawa',
            'email' => 'baguslanangpurbhawa@gmail.com',
            'password' => Hash::make('lanang200603'),
            'role_id' => 4
        ]);
        // $data = [
        //     'waitress', 'chef', 'cashier', 'manager'
        // ];
        // foreach ($data as $value){
        //     User::insert([
        //         'name' => $value,
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]);
        // }
    }
}
