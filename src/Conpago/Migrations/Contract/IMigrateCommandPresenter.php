<?php
/**
 * Created by PhpStorm.
 * User: bg
 * Date: 18.05.15
 * Time: 00:39
 *
 * @package    Conpago-Migrations-Contract
 * @subpackage Base
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Migrations\Contract;

/**
 * Provides adapter of application presentation layer for migration process.
 */
interface IMigrateCommandPresenter
{

    /**
     * Report start of migration process.
     *
     * @param integer $count Number of migrations to run in current course.
     *
     * @return void
     */
    public function migrationStarted($count);

    /**
     * Report finish of migration process.
     *
     * @return void
     */
    public function migrationEnded();

    /**
     * Report run of migration.
     *
     * @param integer $number Sequence number of migrations in current course.
     * @param integer $count  Number of migrations to run in current course.
     *
     * @return void
     */
    public function runningMigration($number, $count);
}
