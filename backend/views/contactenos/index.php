<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ContactenosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contactenos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactenos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'correo',
            'mensaje:ntext',
        ],
    ]); ?>

</div>
