<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\company */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-form">

    <?php yii\widgets\Pjax::begin(['id' => 'update_company']) ?>

    <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inn')->textInput() ?>

    <?= $form->field($model, 'ceo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>



    <?php Pjax::end() ?>

</div>
