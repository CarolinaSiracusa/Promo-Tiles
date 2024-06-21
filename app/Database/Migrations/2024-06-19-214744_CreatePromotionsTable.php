<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePromotionsTable extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                    'type' => 'INT',
                    'constraint' => 5,
                    'auto_increment' => TRUE
            ),
            'title' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
            ),
            'image' => array(
                    'type' => 'TEXT',
                    'null' => TRUE,
            ),
            'description' => array(
                    'type' => 'TEXT',
                    'null' => TRUE,
            ),
    ));
    $this->forge->addKey('id', TRUE);
    $this->forge->createTable('promotions');
    }

    public function down()
    {
        $this->forge->dropTable('promotions');
    }
}
