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
            'image' => 'https://snov.io/blog/wp-content/uploads/2021/08/Webp.net-resizeimage3-1024x512.png',
            'description' => 'Promotion 2 description'],
            ['id' => 3,
            'title' => 'Promotion 3',
            'image' => 'https://snov.io/blog/wp-content/uploads/2021/08/Webp.net-resizeimage3-1024x512.png',
            'description' => 'Promotion 3 description']
        ];

        $this->db->table('promotions')->insertBatch($data);
    }
}
