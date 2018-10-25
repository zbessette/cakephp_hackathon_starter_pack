<?php
use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
	/**
	 * Change Method.
	 *
	 * More information on this method is available here:
	 * http://docs.phinx.org/en/latest/migrations.html#the-change-method
	 * @return void
	 */
	public function change(){
		$table = $this->table('users');

		$table->addColumn('first_name', 'text', [
			'default' => null,
			'null' => false,
		]);

		$table->addColumn('last_name', 'text', [
			'default' => null,
			'null' => false,
		]);

		$table->addColumn('username', 'text', [
			'default' => null,
			'null' => false,
		]);

		$table->addColumn('password', 'text', [
			'default' => null,
			'null' => false,
		]);

		$table->addColumn('role_id', 'integer', [
			'default' => null,
			'null' => false,
		]);

		$table->addColumn('created', 'datetime', [
			'default' => null,
			'null' => false,
		]);
		$table->addColumn('modified', 'datetime', [
			'default' => null,
			'null' => false,
		]);
		$table->create();
	}
}
