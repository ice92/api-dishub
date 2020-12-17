<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Trayek extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'kode'=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> '10'
			],
			'jaringan'=>[
				'type'			=> 'TEXT'
			]
		]);
		$this->forge->addKey('kode',true);
		$this->forge->createTable('trayek');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
