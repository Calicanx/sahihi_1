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
            <!-- Add more table headers as needed -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($leads as $lead): ?>
            <tr>
                <td><?= Html::encode("{$lead->id}") ?></td>
                <td><?= Html::encode("{$lead->name}") ?></td>
                <td><?= Html::encode("{$lead->email}") ?></td>
                <!-- Add more table cells as needed -->
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
