<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Leads</h1>

<table class="table">
    <thead>
        <tr>
            <th>Lead ID</th>
            <th>Lead Name</th>
            <th>Lead Email</th>
            <th>Actions</th> <!-- Change the column header -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($leads as $lead): ?>
            <tr>
                <td><?= Html::encode("{$lead->id}") ?></td>
                <td><?= Html::encode("{$lead->name}") ?></td>
                <td><?= Html::encode("{$lead->email}") ?></td>
                <td>
                    <?= Html::a('Edit', ['update', 'id' => $lead->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Update', ['edit', 'id' => $lead->id], ['class' => 'btn btn-success']) ?>
                    <?= Html::a('Mail', ['lead/mail', 'id' => $lead->id], ['class' => 'btn btn-info']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $lead->id], ['class' => 'btn btn-danger', 'data-confirm' => 'Are you sure you want to delete this item?', 'data-method' => 'post']) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
