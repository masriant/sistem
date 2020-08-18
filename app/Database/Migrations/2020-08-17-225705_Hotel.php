<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Hotel extends Migration
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
			'hotel'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'alamat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'kota'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'grup'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'room'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'marketing'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'contact_marketing'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'status_marketing'       => [
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
			'bed_single'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'bed_double'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'bed_twin'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'meeting_halfday'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'meeting_fullday'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'meeting_fullboard'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'compliment'       => [
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
		$this->forge->createTable('db_hotel', FALSE, $attributes);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('db_hotel', TRUE);
	}
}

// php spark migrate:create Hotel
// php spark migrate