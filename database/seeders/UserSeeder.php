<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Konsultasi;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Buat 20 user dan data relasi
        for ($i = 1; $i <= 20; $i++) {
            // Buat user
            $user = User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'), // default password
                'role' => 'user',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ]);

            // Buat user profile
            $user->userProfile()->create([
                'education' => $faker->randomElement(['SMA', 'S1', 'S2', 'S3']),
                'job' => $faker->jobTitle,
                'disease_history' => $faker->sentence,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'country' => $faker->country,
                'instagram' => $faker->userName,
                'x_account' => $faker->userName,
                'facebook' => $faker->userName,
                'linkedin' => $faker->userName,
                'profile_picture' => null, // atau pakai default.jpg
            ]);

            // Buat data konsultasi
            Konsultasi::create([
                'user_id' => $user->id,
                'jenis_konsultasi' => $faker->randomElement(['Kesehatan', 'Psikologi', 'Gizi']),
                'tanggal_konsultasi' => $faker->dateTimeBetween('-30 days', 'now'),
                'umur' => $faker->numberBetween(10, 60),
                'keluhan' => $faker->sentence(8),
                'status' => $faker->randomElement(['menunggu', 'dijawab', 'ditolak']),
            ]);
        }
    }
}
