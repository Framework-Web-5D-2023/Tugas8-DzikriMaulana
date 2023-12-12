<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class Order extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 20; $i++) {
            $data = [
                'id_product' => $faker->numberBetween(4, 28),
                'nama' => $faker->word,
                'penerima' => $faker->name,
                'jumlah' => $faker->numberBetween(1, 5),
                'kodepos' => $faker->postcode,
                'kecamatan' => $faker->city,
                'kabupaten' => $faker->city,
                'provinsi' => $faker->state,
                'alamat' => $faker->address,
                'jumlahbayar' => $faker->randomFloat(2, 100000, 5000000),
                'bukti_pembayaran' => null,
            ];

            $this->db->table('order')->insertBatch($data);
        }
    }
}
