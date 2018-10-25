<?php
namespace App\Shell;

use Cake\Console\Shell;
use Cake\ORM\TableRegistry;
/**
 * Start shell command.
 */
class StartShell extends Shell
{

	/**
	 * Manage the available sub-commands along with their arguments and help
	 *
	 * @see http://book.cakephp.org/3.0/en/console-and-shells.html#configuring-options-and-generating-help
	 *
	 * @return \Cake\Console\ConsoleOptionParser
	 */
	public function getOptionParser(){
		$parser = parent::getOptionParser();

		return $parser;
	}

	/**
	 * main() method.
	 *
	 * @return bool|int|null Success or error code.
	 */
	public function main() {
		$this->out($this->OptionParser->help());
	}

	public function begin() {
		$this->dispatchShell('migrations migrate');

		//Create proper roles
		$this->Roles = TableRegistry::get('Roles');
		$roles = [
			$this->Roles->newEntity(['name' => 'admin', 'priority' => 1]),
			$this->Roles->newEntity(['name' => 'user', 'priority' => 10]),
		];
		$this->Roles->saveMany($roles);
		$this->out('Succesfully migrated tables and created admin and user roles.');
	}

}
