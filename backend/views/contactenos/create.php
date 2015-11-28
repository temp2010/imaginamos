<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Contactenos */

$this->title = 'Create Contactenos';
$this->params['breadcrumbs'][] = ['label' => 'Contactenos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactenos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
