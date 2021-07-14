<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pad extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				 'type'           => 'INT',
				 'constraint'     => 11,
				 'unsigned'       => TRUE,
				 'auto_increment' => TRUE
			  ],
			 'jenis_retribusi' => [
				  'type'           => 'VARCHAR',
				  'constraint'     => '255',
			  ],
			  'target'     => [
				  'type'   => 'INT',
				  'constraint' => 11,
				  'unsigned => TRUE'
			  ],
			  'real'     => [
				'type'   => 'INT',
				'constraint' => 11,
				'unsigned => TRUE'
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
		  $this->forge->addKey('id', TRUE);
		  $this->forge->createTable('pad');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
