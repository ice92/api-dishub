<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Keberangkatan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'=>[
				'type' 			=> 'INT',
				'constraint' 	=> 11,
				'unsigned'		=> true,
				'auto_increment'=> true
			],'nama'=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '100'
			],
			'penumpang_in'=>[
				'type'			=> 'INT',
				'constraint'	=> 11,
				'UNSIGNED'		=> true
			],
			'penumpang_out'=>[
				'type'			=> 'INT',
				'constraint'	=> 11,
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
		$this->forge->createTable('keberangkatan');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
