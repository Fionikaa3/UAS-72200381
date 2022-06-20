<?php

use Illuminate\Database\Seeder;

class MhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');
        
        for($i = 1; $i <= 100; $i++)
        DB::table('mahasiswa')->insert([
            'nim' => $faker->nik(),
            'nama' => $faker->name(),
            'gender' => $faker->randomElement(['male', 'female']),
            'jurusan' => $faker->jobTitle(),
            'bidangminat' => $faker->suffix()
        
        ]);
    }
}
