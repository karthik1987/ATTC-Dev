<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CourseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="course-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CRM_Course_Code') ?>

    <?= $form->field($model, 'CRM_Course_Trade_Category') ?>

    <?= $form->field($model, 'CRM_Course_Title') ?>

    <?= $form->field($model, 'CRM_Course_Level') ?>

    <?= $form->field($model, 'CRM_Course_Gross_Fee') ?>

    <?php // echo $form->field($model, 'CRM_Course_Training_Hrs') ?>

    <?php // echo $form->field($model, 'CRM_Course_Test_Hrs') ?>

    <?php // echo $form->field($model, 'CRM_Testing_Date') ?>

    <?php // echo $form->field($model, 'CRM_Course_Test_Required') ?>

    <?php // echo $form->field($model, 'CRM_Course_Enrollment_Deadline') ?>

    <?php // echo $form->field($model, 'CRM_Course_Replacement_Deadline') ?>

    <?php // echo $form->field($model, 'CRM_Course_Replacement_Admin_Fee_Percentage') ?>

    <?php // echo $form->field($model, 'CRM_Course_Withdrawal_Deadline') ?>

    <?php // echo $form->field($model, 'CRM_Course_Withdrawal_Admin_Fee_Percentage') ?>

    <?php // echo $form->field($model, 'CRM_Course_Postponement_Deadline') ?>

    <?php // echo $form->field($model, 'CRM_Course_Postponement_Admin_Fee_Percentage') ?>

    <?php // echo $form->field($model, 'CRM_Flexifield1') ?>

    <?php // echo $form->field($model, 'CRM_Flexifield2') ?>

    <?php // echo $form->field($model, 'CRM_Flexifield3') ?>

    <?php // echo $form->field($model, 'CRM_Flexifield4') ?>

    <?php // echo $form->field($model, 'CRM_Flexifield5') ?>

    <?php // echo $form->field($model, 'CRM_Flexifield6') ?>

    <?php // echo $form->field($model, 'CRM_UserID') ?>

    <?php // echo $form->field($model, 'CRM_TimeStamp') ?>

    <?php // echo $form->field($model, 'CRM_ModTimeStamp') ?>

    <?php // echo $form->field($model, 'CRM_Active') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
