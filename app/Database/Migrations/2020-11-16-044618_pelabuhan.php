<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelabuhan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'nama'=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '100'
			],
			'kecamatan'=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> '100'
			],
			'desa'=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> '100'
			],
			'jenis'=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> '100'
			],
			'kapal'=>[
				'type'			=> 'INT',
				'constraint'	=> 11,
				'UNSIGNED'		=> true
			]
		]);
		$this->forge->addKey('nama',true);
		$this->forge->createTable('pelabuhan');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
