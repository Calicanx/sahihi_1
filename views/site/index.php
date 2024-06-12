<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;

/** @var yii\web\View $this */
/** @var app\models\Leads $model */
/** @var ActiveForm $form */
?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 bg-dark sidebar">
            <div class="sidebar-sticky">
                <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-light">
                    Dashboard
                </h5>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <?= Html::a('View Leads Records', ['site/viewleads'], ['class' => 'text-dark']) ?>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('View Customer Records', ['site/viewcustomers'], ['class' => 'text-dark']) ?>
                    </li>
                     <li class="nav-item">
                         <?= Html::a('Add Customer/Lead Record', ['site/create'], ['class' => 'text-dark']) ?>
                     </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 ml-sm-auto col-lg-9 px-4">
            <h2 class="mt-3">Customer/Lead Records</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Lead ID</th>
                            <th>Lead Name</th>
                            <th>Lead Email</th>
                            <th>Customer</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
        <?php foreach ($leads as $lead): ?>
            <tr>
                <td><?= Html::encode("{$lead->id}") ?></td>
                <td><?= Html::encode("{$lead->name}") ?></td>
                <td><?= Html::encode("{$lead->email}") ?></td>
                <td><?= $lead->customer == 1 ? 'Customer' : 'Lead' ?></td>
                 <td>
                    <?= Html::a('Edit', ['update', 'id' => $lead->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Update', ['edit', 'id' => $lead->id], ['class' => 'btn btn-success']) ?>
                    <?= Html::a('Mail', ['lead/mail', 'id' => $lead->id], ['class' => 'btn btn-info']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $lead->id], ['class' => 'btn btn-danger', 'data-confirm' => 'Are you sure you want to delete this item?', 'data-method' => 'post']) ?>
                </td>

                <!-- Add more table cells as needed -->
            </tr>
        <?php endforeach; ?>
                        <!-- Table rows for customer/lead records here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
