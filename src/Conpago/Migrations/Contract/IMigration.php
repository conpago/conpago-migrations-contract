<?php
/**
 * Created by PhpStorm.
 * User: bg
 * Date: 19.05.15
 * Time: 19:43
 *
 * @package    Conpago-Migrations-Contract
 * @subpackage Base
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Migrations\Contract;

/**
 * Provides migration to migrate database to new version.
 */
interface IMigration
{

    /**
     * Applies migration to current database.
     *
     * @return void
     */
    public function apply(): void;
}
