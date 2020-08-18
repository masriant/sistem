<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tema extends Migration
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
			'tema'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'materi'       => [
				'type'           => 'TEXT',
			],
			'created_at' => [
				'type'					 => 'DATETIME',
				'null'					 => true,
			],
			'updated_at' => [
				'type'					=> 'DATETIME',
				'null'					=> true,
			],
			'deleted_at' => [
				'type'					=> 'DATETIME',
				'null'					=> false,
			]
		]);
		$this->forge->addKey('id', true);
		$attributes = ['ENGINE' => 'InnoDB'];
		$this->forge->createTable('db_tema', FALSE, $attributes);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}