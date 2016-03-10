<?php

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Course */
/* @var $form yii\widgets\ActiveForm */

$adminID=Yii::$app->user->getId();
$testDates=ArrayHelper::map(\app\models\Test::find()->asArray()->where("TM_Status = 'YES' ")->all(),'TM_Test_Id', 'TM_Date'); 
$Trades=ArrayHelper::map(\app\models\Trade::find()->asArray()->where("TR_Active = 'YES' ")->all(),'TR_Trade_Id', 'TR_Title'); 
?>
<style>
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(assets/Preloader_8.gif) center no-repeat #fff;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript">
/*	$(window).load(function() {
		 $("#loader").removeClass("se-pre-con");
	});
*/</script>


    <?php $form = ActiveForm::begin(); ?>
	<div class="course-form col-md-6">	
		
			<?= $form->field($model, 'CRM_Course_Code')->textInput(['maxlength' => true]) ?>
			
			<?= $form->field($model, 'CRM_Course_Trade_Category')->dropDownList($Trades, ['TR_Trade_Id'=>'TR_Title','class'=>'form-control','prompt'=>'Select Trade']); ?>
		
			<?= $form->field($model, 'CRM_Course_Title')->textInput(['maxlength' => true]) ?>
					
			<?= $form->field($model, 'CRM_Course_Level')->textInput(['maxlength' => true]) ?>
			 
			<?= $form->field($model, 'CRM_Course_Gross_Fee')->textInput(['maxlength' => true]) ?>
		
			<?= $form->field($model, 'CRM_Course_Training_Hrs')->textInput() ?>
			
			<?= $form->field($model, 'CRM_Course_Test_Hrs')->textInput() ?>
	
			<?= $form->field($model, 'CRM_Testing_Date')->dropDownList($testDates, ['TM_Test_Id'=>'TM_Date','class'=>'form-control','prompt'=>'Select Date','onchange'=>'
               $.get( "'.HtmlPurifier::process('index.php?r=course/lists').'&id="+$(this).val(), function( data ) {
                  $( "#course-crm_active" ).html( data );
                });
            ']); 
			?>		
		
	</div>
	
	<div class="course-form col-md-6">
		
			<?=  $form->field($model, 'CRM_Course_Test_Required')->dropDownList(['1' => 'Yes', '2' => 'No'],['prompt'=>'Select Status']); ?>
			
			<?= $form->field($model,'CRM_Course_Enrollment_Deadline')->widget(DatePicker::className(), ['dateFormat' => 'yyyy-MM-dd','options' => ['class' => 'form-control','buttonImage'=> "assets/calendar.gif",'todayHighlight' => true],'clientOptions' => ['minDate' => 0]]) ?>
			
			<?= $form->field($model,'CRM_Course_Replacement_Deadline')->widget(DatePicker::className(), ['dateFormat' => 'yyyy-MM-dd','options' => ['class' => 'form-control','buttonImage'=> "assets/calendar.gif",'todayHighlight' => true],'clientOptions' => ['minDate' => 0]]) ?>
			
			<?= $form->field($model, 'CRM_Course_Replacement_Admin_Fee_Percentage')->textInput() ?>
		
			<?= $form->field($model,'CRM_Course_Withdrawal_Deadline')->widget(DatePicker::className(), ['dateFormat' => 'yyyy-MM-dd','options' => ['class' => 'form-control','buttonImage'=> "assets/calendar.gif",'todayHighlight' => true],'clientOptions' => ['minDate' => 0]]) ?>
	
			<?= $form->field($model, 'CRM_Course_Withdrawal_Admin_Fee_Percentage')->textInput() ?>
			
			<?= $form->field($model,'CRM_Course_Postponement_Deadline')->widget(DatePicker::className(), ['dateFormat' => 'yyyy-MM-dd','options' => ['class' => 'form-control','buttonImage'=> "assets/calendar.gif",'todayHighlight' => true],'clientOptions' => ['minDate' => 0]]) ?>
		
			<?= $form->field($model, 'CRM_Course_Postponement_Admin_Fee_Percentage')->textInput() ?>
			
			<?= $form->field($model, 'CRM_UserID')->hiddenInput(['value' => $adminID])->label(false)  ?>
			
			<?php echo $status = $model->isNewRecord ? '' : $form->field($model, 'CRM_Active')->dropDownList(['YES' => 'Yes', 'NO' => 'No'],['prompt'=>'Select Status']);  ?>
		
	</div>
		
	<div class="course-form col-md-12 text-center">

			<div class="form-group" style="padding-top:25px;">
				<div id="loader"></div>
				<div id="course-crm_active"></div>
				<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
				<?= Html::a('Cancel', ['/course/index'], ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
			</div>
	
	</div>

    <?php ActiveForm::end(); ?>
