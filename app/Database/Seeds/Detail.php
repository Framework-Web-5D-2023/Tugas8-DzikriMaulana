<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Detail extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 4,
                'nama' => 'Kursi Kayu',
                'harga' => 1500000,
                'merek' => 'Mebel Jaya',
                'imageurl' => 'kursi_kayu.png',
            ],
            [
                'id' => 5,
                'nama' => 'Meja Makan',
                'harga' => 2500000,
                'merek' => 'Mebel Utama',
                'imageurl' => 'meja_makan.png',
            ],
            [
                'id' => 6,
                'nama' => 'Lemari Pakaian',
                'harga' => 3500000,
                'merek' => 'Furniture Berkah',
                'imageurl' => 'lemari_pakaian.png',
            ],
            [
                'id' => 7,
                'nama' => 'Sofa Empuk',
                'harga' => 4500000,
                'merek' => 'Mebel Sejahtera',
                'imageurl' => 'sofa_empuk.png',
            ],
            [
                'id' => 8,
                'nama' => 'Rak Buku',
                'harga' => 750000,
                'merek' => 'Furniture Berkah',
                'imageurl' => 'rak_buku.png',
            ],
            [
                'id' => 9,
                'nama' => 'Meja Kecil',
                'harga' => 1200000,
                'merek' => 'Mebel Jaya',
                'imageurl' => 'meja_kecil.png',
            ],
            [
                'id' => 10,
                'nama' => 'Ranjang Empuk',
                'harga' => 2000000,
                'merek' => 'Mebel Kurcaci',
                'imageurl' => 'ranjang.png',
            ],
            [
                'id' => 11,
                'nama' => 'sofa_mewah',
                'harga' => 2000000,
                'merek' => 'Mebel Jaya',
                'imageurl' => 'sofa_mewah.png',
            ],
            [
                'id' => 12,
                'nama' => 'kursi_tiktalk',
                'harga' => 1500000,
                'merek' => 'Mebel Utama',
                'imageurl' => 'kursi_tiktalk.png',
            ],
            [
                'id' => 13,
                'nama' => 'kursi_set_tamu',
                'harga' => 1800000,
                'merek' => 'Furniture Berkah',
                'imageurl' => 'kursi_set_tamu.png',
            ],
            [
                'id' => 14,
                'nama' => 'kursi_set_minimalis',
                'harga' => 1700000,
                'merek' => 'Mebel Sejahtera',
                'imageurl' => 'kursi_set_minimalis.png',
            ],
            [
                'id' => 15,
                'nama' => 'meja_rias',
                'harga' => 2500000,
                'merek' => 'Mebel Jaya',
                'imageurl' => 'meja_rias.png',
            ],
            [
                'id' => 16,
                'nama' => 'kursi_solo',
                'harga' => 1200000,
                'merek' => 'Mebel Utama',
                'imageurl' => 'kursi_solo.png',
            ],
            [
                'id' => 17,
                'nama' => 'sofa_arabic',
                'harga' => 2200000,
                'merek' => 'Furniture Berkah',
                'imageurl' => 'sofa_arabic.png',
            ],
            [
                'id' => 18,
                'nama' => 'sofa_putih_a20',
                'harga' => 1900000,
                'merek' => 'Mebel Sejahtera',
                'imageurl' => 'sofa_putih_a20.png',
            ],
            [
                'id' => 19,
                'nama' => 'sofa_hijau_classic',
                'harga' => 2100000,
                'merek' => 'Mebel Jaya',
                'imageurl' => 'sofa_hijau_classic.png',
            ],
            [
                'id' => 20,
                'nama' => 'sofa_mewah',
                'harga' => 2000000,
                'merek' => 'Mebel Jaya',
                'imageurl' => 'sofa_mewah.png',
            ],
            [
                'id' => 21,
                'nama' => 'kursi_tiktalk',
                'harga' => 1500000,
                'merek' => 'Mebel Utama',
                'imageurl' => 'kursi_tiktalk.png',
            ],
            [
                'id' => 22,
                'nama' => 'kursi_set_tamu',
                'harga' => 1800000,
                'merek' => 'Furniture Berkah',
                'imageurl' => 'kursi_set_tamu.png',
            ],
            [
                'id' => 23,
                'nama' => 'kursi_set_minimalis',
                'harga' => 1700000,
                'merek' => 'Mebel Sejahtera',
                'imageurl' => 'kursi_set_minimalis.png',
            ],
            [
                'id' => 24,
                'nama' => 'meja_rias',
                'harga' => 2500000,
                'merek' => 'Mebel Jaya',
                'imageurl' => 'meja_rias.png',
            ],
            [
                'id' => 25,
                'nama' => 'kursi_solo',
                'harga' => 1200000,
                'merek' => 'Mebel Utama',
                'imageurl' => 'kursi_solo.png',
            ],
            [
                'id' => 26,
                'nama' => 'sofa_arabic',
                'harga' => 2200000,
                'merek' => 'Furniture Berkah',
                'imageurl' => 'sofa_arabic.png',
            ],
            [
                'id' => 27,
                'nama' => 'sofa_putih_a20',
                'harga' => 1900000,
                'merek' => 'Mebel Sejahtera',
                'imageurl' => 'sofa_putih_a20.png',
            ],
            [
                'id' => 28,
                'nama' => 'sofa_hijau_classic',
                'harga' => 2100000,
                'merek' => 'Mebel Jaya',
                'imageurl' => 'sofa_hijau_classic.png',
            ],
        ];

        // Insert data into the table
        $this->db->table('detail')->insertBatch($data);
    }
}
