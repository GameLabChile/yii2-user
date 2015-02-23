<?php

/*
 * This file is part of the Gamelab project.
 *
 * (c) Gamelab project <http://github.com/gamelab>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

/**
 * @var $this   yii\web\View
 * @var $title  string
 * @var $module gamelab\user\Module
 */

$this->title = $title;

?>

<?= $this->render('/_alert', [
    'module' => $module,
]) ?>
