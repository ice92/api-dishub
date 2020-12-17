<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengujian extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'=>[
				'type' 			=> 'INT',
				'constraint' 	=> 11,
				'unsigned'		=> true,
				'auto_increment'=> true
			],
			'jenis'=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '100'
			],
			'jumlah'=>[
				'type'			=> 'INT',
				'constraint'	=> 11,
				'UNSIGNED'		=> true
			],
			'tahun'=>[
				'type'			=> 'VARCHAR',
				'CONSTRAINT'	=> '4'
			]
		]);
		$this->forge->addKey('id',true);
		$this->forge->createTable('pengujian');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
