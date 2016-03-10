<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CourseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    

	<div class="text-left">
		<?=Html::beginForm(['course/status'],'post',$options = ['id'=>'w0']);?>
		<?= Html::a('Create Course', ['create'], ['class' => 'btn btn-success']) ?>
		<?=Html::dropDownList('action','',[''=>'Status ','YES'=>'Yes','NO'=>'No'],['class'=>'btn btn-default text-left' ])?>
		<?=Html::submitButton('Update', ['class' => 'btn btn-info']);?>
		<?php if(Yii::$app->getSession()->getFlash('statusMsg')) { echo Yii::$app->getSession()->getFlash('statusMsg'); } ?> 
		<?= Html::a('Calendar', ['calendar/index'], ['class' => 'btn btn-success']) ?>   

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
         /*   ['class' => 'yii\grid\SerialColumn'],	*/
			[
            'class' => 'yii\grid\CheckboxColumn',
            'checkboxOptions' => function($model, $key, $index, $column) {
                  return ['value' => $model->CRM_Course_Code];
				 //  return Html::checkbox('Id[]',true,['uncheck'=>"r".$data->id,'value'=>$data->id]);
            }

        ],	
				
            'CRM_Course_Code',
            ['attribute' => 'CRM_Course_Trade_Category','value' => 'trade.TR_Title'],
            'CRM_Course_Title',
            'CRM_Course_Level',
            'CRM_Course_Gross_Fee',
            // 'CRM_Course_Training_Hrs',
            // 'CRM_Course_Test_Hrs',
            // 'CRM_Testing_Date',
            // 'CRM_Course_Test_Required',
            // 'CRM_Course_Enrollment_Deadline',
            // 'CRM_Course_Replacement_Deadline',
            // 'CRM_Course_Replacement_Admin_Fee_Percentage',
            // 'CRM_Course_Withdrawal_Deadline',
            // 'CRM_Course_Withdrawal_Admin_Fee_Percentage',
            // 'CRM_Course_Postponement_Deadline',
            // 'CRM_Course_Postponement_Admin_Fee_Percentage',
            // 'CRM_Flexifield1',
            // 'CRM_Flexifield2',
            // 'CRM_Flexifield3',
            // 'CRM_Flexifield4',
            // 'CRM_Flexifield5',
            // 'CRM_Flexifield6',
            // 'CRM_UserID',
            // 'CRM_TimeStamp',
            // 'CRM_ModTimeStamp',
             'CRM_Active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	
	<?= Html::endForm();?>
	</div>
</div>
