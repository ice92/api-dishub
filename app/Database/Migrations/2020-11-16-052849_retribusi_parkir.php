<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RetribusiParkir extends Migration
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
			'kode'=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> '10'
			],
			'retribusi'=>[
				'type'			=> 'INT',
				'constraint'	=> 12,
				'UNSIGNED'		=> true
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
		$this->forge->createTable('retribusi_parkir');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
