<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Configuracion */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Configuracions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="configuracion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nombre',
            [
                'label' => 'banner',
                'format' => 'raw',
                'value' => Html::img('../../frontend/web/imagenes/banner.png', ['alt' => 'banner']),
            ],
        ],
    ]) ?>

</div>
