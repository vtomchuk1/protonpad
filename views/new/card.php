<?php

use vova07\imperavi\Widget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Card */
/* @var $form ActiveForm */
?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="new-card">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Starter Page</h4>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <?php $form = ActiveForm::begin(); ?>
                                <div class="card-body">
                                    <!--
                                    <h4 class="card-title">Card title</h4>
                                    -->
                                        <? $form->field($model, 'id_user') ?>
                                        <? $form->field($model, 'date_create') ?>
                                        <? $form->field($model, 'del') ?>
                                    <div class="mb-3 row">
                                        <?= $form->field($model, 'content')->widget(Widget::className(), [
                                            'settings' => [
                                                'lang' => 'ru',
                                                'minHeight' => 200,
                                                'plugins' => [
                                                    'clips',
                                                    'fullscreen',
                                                ],
                                                'clips' => [
                                                    ['Lorem ipsum...', 'Lorem...'],
                                                    ['red', '<span class="label-red">red</span>'],
                                                    ['green', '<span class="label-green">green</span>'],
                                                    ['blue', '<span class="label-blue">blue</span>'],
                                                ],
                                            ],
                                        ]); ?>
                                    </div>
                                        <? $form->field($model, 'date_update') ?>
                                    <div class="mb-3 row">
                                        <?= $form->field($model, 'category') ?>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
                    </div>
                <?php ActiveForm::end(); ?>

            </div><!-- new-card -->
        </div>
    </div>
</div>