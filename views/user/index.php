<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username:ntext',
            'nombre:ntext',
            'apellido:ntext',
            'admin:boolean',
           // 'suspendido:boolean',
            //'email:ntext',             
            //'registration_ip:ntext',
            //'unconfirmed_email:ntext',
            //'password:ntext',
            //'created_at',
            //'confirmed_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
