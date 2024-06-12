<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Leads $model */
/** @var ActiveForm $form */
?>
<div class="container">
  <div class="row header">
    <div class="col-sm-12">
      <span>Company Name</span>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <h3 class="text-center">
                  CRM PAGE</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 btns"> <?= Html::a('View All Records', ['site/viewall'], ['class' => 'btn btn-secondary btn-lg']) ?> <?= Html::a('Add customer/lead record', ['site/create'], ['class' => 'btn btn-secondary btn-lg']) ?> </div>
  </div>
</div>
