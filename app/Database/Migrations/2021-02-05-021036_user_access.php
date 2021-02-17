<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserAccess extends Migration
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
			'urut'       => [
				'type'       => 'INT',
				'constraint' => '11',
			],
			'level'       => [
				'type'       => 'INT',
				'constraint' => '11',
			],
			'menu'       => [
				'type'       => 'INT',
				'constraint' => '11',
			],
			'status'       => [
				'type'       => 'INT',
				'constraint' => '1',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('user_access');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('user_access');
	}
}
