<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Course */

$this->title = $model->CRM_Course_Code;
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CRM_Course_Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CRM_Course_Id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
		<?= Html::a('Back', ['/course/index'], ['class' =>  'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'CRM_Course_Code',
            'CRM_Course_Trade_Category',
            'CRM_Course_Title',
            'CRM_Course_Level',
            'CRM_Course_Gross_Fee',
            'CRM_Course_Training_Hrs',
            'CRM_Course_Test_Hrs',
            'CRM_Testing_Date',
            'CRM_Course_Test_Required',
            'CRM_Course_Enrollment_Deadline',
            'CRM_Course_Replacement_Deadline',
            'CRM_Course_Replacement_Admin_Fee_Percentage',
            'CRM_Course_Withdrawal_Deadline',
            'CRM_Course_Withdrawal_Admin_Fee_Percentage',
            'CRM_Course_Postponement_Deadline',
            'CRM_Course_Postponement_Admin_Fee_Percentage',
            'CRM_UserID',
            'CRM_TimeStamp',
            'CRM_ModTimeStamp',
            'CRM_Active',
        ],
    ]) ?>

</div>
