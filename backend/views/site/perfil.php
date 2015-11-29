<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">

		<?= Html::img('@web/imagenes/'. Yii::$app->user->identity->imagen, ['alt'=>'perfil', 'class'=>'thing']);?>

            </div>
            <div class="col-lg-4">
                <h2><?= Yii::$app->user->identity->nombre ?></h2>

                <p><?= Yii::$app->user->identity->usuario ?></p>
            </div>
        </div>

    </div>
</div>
