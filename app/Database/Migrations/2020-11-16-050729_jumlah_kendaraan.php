<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JumlahKendaraan extends Migration
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
			'kendaraan'=>[
				'type'			=> 'INT',
				'constraint'	=> 11,
				'UNSIGNED'		=> true
			],
			'tahun'=>[
				'type'			=> 'VARCHAR',
				'CONSTRAINT'	=>'4'
			]
		]);
		$this->forge->addKey('id',true);
		$this->forge->createTable('jumlah_kendaraan');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
