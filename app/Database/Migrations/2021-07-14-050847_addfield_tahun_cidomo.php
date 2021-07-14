<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddfieldTahunCidomo extends Migration
{
	public function up()
	{
		$this->forge->addColumn('cidomo',['tahun VARCHAR(4)'

		]);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropColumn('cidomo', 'tahun');
	}
}
