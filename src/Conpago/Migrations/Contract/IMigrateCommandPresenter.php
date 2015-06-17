<?php
	/**
	 * Created by PhpStorm.
	 * User: bg
	 * Date: 18.05.15
	 * Time: 00:39
	 */

	namespace Saigon\Conpago\Migrations\Contract;


	interface IMigrateCommandPresenter
	{
		public function migrationStarted( $count );

		public function migrationEnded();

		public function runningMigration( $number, $count );
	}