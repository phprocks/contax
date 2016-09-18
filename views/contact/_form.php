<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Category;

?>

<div class="contact-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->orderBy("name ASC")->all(), 'id', 'name'),['prompt'=>'-- select --'])  ?>

    <?= $form->field($model, 'shortname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'celphone')->textInput(['maxlength' => 45]) ?>

    <?php
   echo $form->field($model, 'rating')->widget(\yii2mod\rating\StarRating::className(), [
                       'options' => [
                           // options
                       ],
                       'clientOptions' => [
                           'numberMax' => 10,
                           'number' => 10,
                           'starType' => 'img', 
                       ]
                   ]); 
    ?> 

        <?= $form->field($model, 'fullname')->textInput(['maxlength' => 45]) ?>   

    <?= $form->field($model, 'phone')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mail')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'blog')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'facebookpage')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'twitterpage')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'googlepluspage')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'avatar')->textInput(['maxlength' => 45]) ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
