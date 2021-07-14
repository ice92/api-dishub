<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterKapal extends Migration
{
	public function up()
	{
		$this->forge->addColumn('kapal',['pelabuhan VARCHAR(100)'

		]);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropColumn('kapal', 'pelabuhan');
	}
}
