<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\uploads\models\Upload $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="upload-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'upload_ref')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'upload_filename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'upload_path')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
