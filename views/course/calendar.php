<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CourseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= Html::a('Calendar', ['calendar'], ['class' => 'btn btn-success']) ?>
	
	<?php
	$events = array();
  //Testing
  $Event = new \yii2fullcalendar\models\Event();
  $Event->id = 1;
  $Event->title = 'Testing';
  $Event->start = date('Y-m-d\Th:m:s\Z');
  $events[] = $Event;
 
  $Event = new \yii2fullcalendar\models\Event();
  $Event->id = 2;
  $Event->title = 'Testing';
  $Event->start = date('Y-m-d\Th:m:s\Z',strtotime('tomorrow 6am'));
  $events[] = $Event;
 
  ?>
 
  <?= \yii2fullcalendar\yii2fullcalendar::widget(array(
      'events'=> $events,
  ));
	?>
	
</div>

