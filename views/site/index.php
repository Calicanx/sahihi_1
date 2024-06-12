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
  <div class="row nav-row">
    <div class="col-sm-12">
      <nav class="nav">
        <ul>
          <li class="dropdown ">
            <a href="#" id="dropdownMenuLink" data-toggle="dropdown" class="dropdown-toggle active">CRM</a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <ll>
                <a href="#">Customers</a>
          </li>
          <ll>
            <a href="#">Firms</a>
            </li>
            <ll>
              <a href="#">Branches</a>
              </li>
              <ll>
                <a href="#">Invoices</a>
                </li>
                <ll>
                  <a href="#">Live Classes</a>
                  </li>
                  <ll>
                    <a href="#">Pending Orders</a>
                    </li>
                    <ll>
                      <a href="#">My Accounts</a>
                      </li>
                      </ul>
                      </li>
                      <li><a href="#">Content Admin</a></li>
                      <li><a href="#">Content Support</a></li>
                      <li><a href="#">Account Management</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <h3 class="text-center">
                  Landing Page</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 btns"> <?= Html::a('View All Records', ['site/viewall'], ['class' => 'btn btn-secondary btn-lg']) ?> <?= Html::a('Add customer/lead record', ['site/create'], ['class' => 'btn btn-secondary btn-lg']) ?> </div>
  </div>
</div>
