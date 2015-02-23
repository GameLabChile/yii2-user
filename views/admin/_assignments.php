<?php

/* 
 * This file is part of the Gamelab project
 * 
 * (c) Gamelab project <http://github.com/gamelab>
 * 
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use gamelab\rbac\widgets\Assignments;
use gamelab\user\models\User;
use yii\web\View;

/**
 * @var View $this
 * @var User $user
 */

?>

<?php $this->beginContent('@gamelab/user/views/admin/update.php', ['user' => $user]) ?>

    <?= yii\bootstrap\Alert::widget([
        'options' => [
            'class' => 'alert-info'
        ],
        'body' => Yii::t('user', 'You can assign multiple roles or permissions to user by using the form below'),
    ]) ?>

    <?= Assignments::widget(['userId' => $user->id]) ?>

<?php $this->endContent() ?>
