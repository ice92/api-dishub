<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Retribusi extends Migration
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
			'nama'=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> '100'
			],
			'retribusi'=>[
				'type'			=> 'INT',
				'constraint'	=> 12,
				'UNSIGNED'		=> true
			],
			'jenis'=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> '255'
			],
			'bulan'=>[
				'type'			=> 'VARCHAR',
				'CONSTRAINT'	=>'10'
			],
			'tahun'=>[
				'type'			=> 'VARCHAR',
				'CONSTRAINT'	=>'4'
			]
		]);
		$this->forge->addKey('id',true);
		$this->forge->createTable('retribusi');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
