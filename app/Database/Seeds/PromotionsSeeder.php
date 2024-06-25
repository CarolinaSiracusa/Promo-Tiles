<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PromotionsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['id' => 1,
            'title' => 'Promotion 1',
            'image' => 'https://snov.io/blog/wp-content/uploads/2021/08/Webp.net-resizeimage3-1024x512.png',
            'description' => 'Promotion 1 description'],
            ['id' => 2,
            'title' => 'Promotion 2',
            'image' => 'https://t3.ftcdn.net/jpg/02/95/65/00/360_F_295650090_kEtvXGeZtWWBf28gNUmZkzFWCkiODSOo.jpg',
            'description' => 'Promotion 2 description'],
            ['id' => 3,
            'title' => 'Promotion 3',
            'image' => 'https://st.depositphotos.com/1518767/2699/i/450/depositphotos_26994017-stock-photo-businessman-writing-promotion.jpg',
            'description' => 'Promotion 3 description']
        ];

        $this->db->table('promotions')->insertBatch($data);
    }
}
