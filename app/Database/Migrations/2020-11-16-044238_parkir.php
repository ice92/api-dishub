<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Parkir extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'kode'=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '10'
			],
			'kecamatan'=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> '100'
			],
			'desa'=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> '100'
			],
			'titik'=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> '100'
			],
			'jenis'=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> '255'
			]
		]);
		$this->forge->addKey('kode',true);
		$this->forge->createTable('parkir');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
