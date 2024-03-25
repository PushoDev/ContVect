<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePasswordResetTokensTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'email'=>[
                'type'=> 'VARCHAR',
                'constraint'=>'255',
            ],
            'token'=>[
                'type'=>'VARCHAR',
                'constraint'=>'255',
            ],
            'created_at timestamp default current_timestamp'
        ]);

        $this->forge->createtable('password_reset_tokens');

    }

    public function down()
    {
        $this->forge->dropTable('password_reset_tokens');
    }
}
