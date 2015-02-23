<?php

/*
 * This file is part of the Gamelab project.
 *
 * (c) Gamelab project <http://github.com/gamelab>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace gamelab\user\widgets;

use gamelab\user\models\LoginForm;
use yii\base\Widget;

/**
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class Login extends Widget
{
    /** @var bool */
    public $validate = true;

    /** @inheritdoc */
    public function run()
    {
        $model  = \Yii::createObject(LoginForm::className());
        $action = $this->validate ? null : ['/user/security/login'];

        if ($this->validate && $model->load(\Yii::$app->request->post()) && $model->login()) {
            return \Yii::$app->response->redirect(\Yii::$app->user->returnUrl);
        }

        return $this->render('login', [
            'model'  => $model,
            'action' => $action
        ]);
    }
}