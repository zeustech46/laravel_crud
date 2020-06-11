<?php
use App\Mahasiswa;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 50; $i++){
            Mahasiswa::create([
                'nama' => $faker->name,
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),            
                'nim' => $faker->numberBetween(1808107010001,1808107010060),
                'dosen_id' => $faker->numberBetween(1,20)
            ]);
        }
    }
}
