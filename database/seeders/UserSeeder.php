<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(50)->create()->each(function ($user) {
            $user->assignRole('siswa');
        });

        \App\Models\User::create([
            'name' => 'Super',
            'email' => 'super@super',
            'username' => 'super',
            'password' => Hash::make("password"),
            'gender' => 'male',
            'date_of_birth' => now()->format('Y-m-d'),
        ])->assignRole('super');

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@mattirodeceng.com',
            'username' => 'admin',
            'password' => Hash::make("password"),
            'gender' => 'male',
            'date_of_birth' => now()->format('Y-m-d'),
        ])->assignRole('admin');

        \App\Models\User::create([
            'name' => 'Kepala sekolah',
            'email' => 'kepalasekolah@mattirodeceng.com',
            'username' => 'kepalasekolah',
            'password' => Hash::make("password"),
            'gender' => 'male',
            'date_of_birth' => now()->format('Y-m-d'),
        ])->assignRole('kepala sekolah');

        $uny = \App\Models\User::create([
            'name' => 'Uny',
            'email' => 'uny@mattirodeceng.com',
            'username' => '721371727',
            'password' => Hash::make("password"),
            'gender' => 'female',
            'phone' => null,
            'date_of_birth' => now()->format('Y-m-d'),
        ])->assignRole('siswa');

        Siswa::create([
            'user_id' => $uny->id,
            'nama_orangtua' => "Melly",
            'nohp_orangtua' => "081244067445",
            'email_orangtua' => 'suryawanabakti18@gmail.com'
        ]);
    }
}
