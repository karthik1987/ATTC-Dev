<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Test */
/* @var $form yii\widgets\ActiveForm */

$Trades=ArrayHelper::map(\app\models\Trade::find()->asArray()->where("TR_Active = 'YES' ")->all(),'TR_Trade_Id', 'TR_Title'); 
?>

<div class="test-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'TRM_Trade_Id')->dropDownList($Trades, ['TR_Trade_Id'=>'TR_Title','class'=>'form-control','prompt'=>'Select Trade']); ?>

	<?= $form->field($model,'TM_Date')->widget(DatePicker::className(), ['dateFormat' => 'yyyy-MM-dd','options' => ['class' => 'form-control','buttonImage'=> "assets/calendar.gif",'todayHighlight' => true],'clientOptions' => ['minDate' => 0]]) ?>

    <?= $form->field($model, 'TM_Capacity')->textInput(['maxlength' => true]) ?>

	<?php echo $status = $model->isNewRecord ? '' : $form->field($model, 'TM_Status')->dropDownList(['YES' => 'Yes', 'NO' => 'No'],['prompt'=>'Select Status']);  ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		<?= Html::a('Cancel', ['/test/index'], ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
