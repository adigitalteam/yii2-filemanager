<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model jakharbek\filemanager\models\Files */

$this->title = 'Update Files: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->file_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="files-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
