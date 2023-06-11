<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\uploads\models\Upload $model */

$this->title = Yii::t('app', 'Update Upload: {name}', [
    'name' => $model->upload_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Uploads'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->upload_id, 'url' => ['view', 'upload_id' => $model->upload_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="upload-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
