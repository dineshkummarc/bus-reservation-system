<?php

namespace Modules\Schedule\Database\Migrations;

use CodeIgniter\Database\Migration;

class Schedulefilter extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'start_time' => [
                'type' => 'TINYTEXT',
            ],

            'end_time' => [
                'type' => 'TINYTEXT',
            ],

            'type' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],

            'detail' => [
                'type'           => 'TEXT',

            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('schedulefilters');
    }

    public function down()
    {
        $this->forge->dropTable('schedulefilters');
    }
}
