<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kapal extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'nama'=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '100'
			],
			'pemilik'=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> '100'
			],
			'alamat'=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> '255'
			],
			'bobot'=>[
				'type'			=> 'INT',
				'constraint'	=> 11,
				'UNSIGNED'		=> true
			],
			'kapasitas'=>[
				'type'			=> 'INT',
				'constraint'	=> 11,
				'UNSIGNED'		=> true
			],
			'jalur'=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> '255'
			]
		]);
		$this->forge->addKey('nama',true);
		$this->forge->createTable('kapal');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
