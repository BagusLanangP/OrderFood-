<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  Proses truncate dapat digunakan untuk membersihkan semua data dalam tabel tertentu, memungkinkan pengembang untuk menguji aplikasi dengan dataset awal.
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Schema::enableForeignKeyConstraints();
        $data = [
            'waitress', 'chef', 'cashier', 'manager'
        ];
        foreach ($data as $value){
            Role::insert([
                'name' => $value,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
