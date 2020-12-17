<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cidomo extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'no_reg'=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '10'
			],
			'pemilik'=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> '100'
			],
			'kecamatan'=>[
				'type'			=> 'VARCHAR',
				'constraint'	=> '100'
			]
		]);
		$this->forge->addKey('no_reg',true);
		$this->forge->createTable('cidomo');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
