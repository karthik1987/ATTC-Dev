<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="text-left">
		<?=Html::beginForm(['test/status'],'post',$options = ['id'=>'w0']);?>
		<?= Html::a('Create Test', ['create'], ['class' => 'btn btn-success']) ?>
		<?=Html::dropDownList('action','',[''=>'Status ','YES'=>'Yes','NO'=>'No'],['class'=>'btn btn-default text-left' ])?>
		<?=Html::submitButton('Update', ['class' => 'btn btn-info']);?>
		<?php if(Yii::$app->getSession()->getFlash('statusMsg')) { echo Yii::$app->getSession()->getFlash('statusMsg'); } ?>  

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
          /*  ['class' => 'yii\grid\SerialColumn'],*/
		  
		  [
            'class' => 'yii\grid\CheckboxColumn',
            'checkboxOptions' => function($model, $key, $index, $column) {
                  return ['value' => $model->TM_Test_Id];
				 //  return Html::checkbox('Id[]',true,['uncheck'=>"r".$data->id,'value'=>$data->id]);
            }

        ],

            //'TM_Test_Id',
            ['attribute' => 'TRM_Trade_Id','value' => 'trade.TR_Title'],
            'TM_Date',
            'TM_Capacity',
            'TM_Status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
	
	<?= Html::endForm();?>
	</div>

</div>
