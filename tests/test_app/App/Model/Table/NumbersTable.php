<?php
/**
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace TestApp\Model\Table;

use Cake\ORM\Table;

/**
 * Numbers Model
 *
 */
class NumbersTable extends Table
{
    public function initialize(array $config)
    {
        $db = env('DB');
        $schema = 'cakephp_test.';
        if ($db === 'pgsql') {
            $schema = '';
        }

        $this->table($schema . 'numbers');
    }
}
