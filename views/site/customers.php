<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Customers</h1>
<table class="table">
    <thead>
        <tr>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Actions</th>
            <!-- Add more table headers as needed -->
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
                    <?= Html::a('Mail', ['mail', 'email' => $lead->email], ['class' => 'btn btn-info']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $lead->id], ['class' => 'btn btn-danger', 'data-confirm' => 'Are you sure you want to delete this item?', 'data-method' => 'post']) ?>
                </td>

                <!-- Add more table cells as needed -->
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
