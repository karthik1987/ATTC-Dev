<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

$this->title = 'Calendar';
$this->params['breadcrumbs'][] = $this->title;

$testDates=ArrayHelper::map(\app\models\Test::find()->asArray()->where("TM_Status = 'YES' ")->all(),'TM_Test_Id', 'TM_Date'); 
?>
<div class="container">
	<div class="pull-left">
		<?= Html::beginForm(['calendar/index'],'post',$options = ['id'=>'w0']);?>
		Trade: <?= Html::dropDownList('action','Trade',[''=>'Status ','1'=>'Trade1','2'=>'Trade2','3'=>'Trade3'],['class'=>'btn btn-default text-left' ])?>
		<br/>
		Level: <?= Html::dropDownList('action','Level',[''=>'Status ','1'=>'Level1','2'=>'Level2','3'=>'Level3'],['class'=>'btn btn-default text-left' ])?>
		<br/>
		Submit: <?=Html::submitButton('Update', ['class' => 'btn btn-info']);?>
		<?= Html::endForm();?>
	</div>
	<div class="calendar pull-right" style="width: 80%;">
	  <?= \yii2fullcalendar\yii2fullcalendar::widget(array('events'=> $events));  ?>
	</div>
</div>
  
  
