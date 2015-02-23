<?php

/*
 * This file is part of the Gamelab project.
 *
 * (c) Gamelab project <http://github.com/gamelab/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use yii\db\Schema;
use yii\db\Migration;

/**
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class m140830_171933_fix_ip_field extends Migration
{
    public function up()
    {
        $this->alterColumn('{{%user}}', 'registration_ip', Schema::TYPE_BIGINT);
    }

    public function down()
    {
        $this->alterColumn('{{%user}}', 'registration_ip', Schema::TYPE_INTEGER);
    }
}
