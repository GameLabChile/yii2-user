<?php

/*
 * This file is part of the Gamelab project.
 *
 * (c) Gamelab project <http://github.com/gamelab/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use yii\db\Migration;

/**
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class m140830_172703_change_account_table_name extends Migration
{
    public function up()
    {
        $this->renameTable('{{%account}}', '{{%social_account}}');
    }

    public function down()
    {
        $this->renameTable('{{%social_account}}', '{{%account}}');
    }
}
