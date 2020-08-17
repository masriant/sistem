<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Content extends Migration
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
			'userid_content'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'slug'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'jabatan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'instansi'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'kabupaten'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'tema'       => [
				'type'           => 'TEXT',
				// 'constraint'     => '255',
			],
			'lokasi'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'hotel'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'room'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'checkin'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'checkout'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'kontribusi'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'kodeqr'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
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
		$this->forge->createTable('db_content', FALSE, $attributes);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		// $this->forge->dropTable('db_content', TRUE);
	}
}
// php spark migrate:create Content
// php spark migrate