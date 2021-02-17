<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserMenu extends Migration
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
			'judul_menu'       => [
				'type'       => 'VARCHAR',
				'constraint' => '50',
			],
			'link' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'icon' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'is_main_menu' => [
				'type' => 'INT',
				'constraint' => '11',
			],
			'is_active' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'is_active_sub' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'status' => [
				'type' => 'INT',
				'constraint' => '1',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('user_menu');
	}

	public function down()
	{
		$this->forge->dropTable('user_menu');
	}
}
