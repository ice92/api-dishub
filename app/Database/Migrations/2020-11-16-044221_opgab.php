<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Opgab extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'=> [
				'type' 			=> 'INT',
				'constraint' 	=> 11,
				'unsigned'		=> true,
				'auto_increment'=> true
			],
			'nama'=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> '100'
			],
			'pelanggaran'=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> '255'
			],
			'lokasi'=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> '100'
			],
			'tanggal'=>[
				'type'			=> 'DATE',				
			],
			'status'=>[
				'type'			=> 'BOOLEAN'				
			]
		]);
		$this->forge->addKey('id',true);
		$this->forge->createTable('opgab');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
