<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Leads $model */
/** @var ActiveForm $form */
?>
<div class="create">

    <?php $form = ActiveForm::begin(); ?>

         <?= $form->field($model, 'customer')->dropDownList([
            '1' => 'Customer',
            '0' => 'Lead',
        ]) ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- create -->
