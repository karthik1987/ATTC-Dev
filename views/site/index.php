<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Home Page';
?>

  	<section cite="slide_img">
    	<img src="http://ntpl.workstaging.com/ATTC-Designs/1/images/slider.jpg" alt="" class="sd_img">
    </section>

    <section>
    	<div class="container">
            
            <div class="col-md-12 col-xs-12">
                <?php
    $request = Yii::$app->request;
    $msg = $request->get('msg');
    if($msg == 'success')
    {
    ?>
                <br>
    <div class="alert alert-success text-center">
        <strong>Success!</strong> Registration is completed.
    </div>
    <?php } ?>
            </div>
            <div class="col-md-6 col-xs-12">
               <div class="user_reg">
                    <p>New User Registration</p>
                    <a href="<?=Url::to(['site/registration']);?>"><button type="submit" class="btn btn-danger cus_btn">Click here</button></a>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
               <div class="log_form">
                        <div class="panel-body">
                                <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-5\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-danger cus_btn', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
                        </div>
                    </div>      
       		</div>
        </div>
    </section>
    <footer id="footer">
    	<p>Design: © 2012 Shingda Construction Pte Ltd. All rights reserved 昇達工程私人有限公司版权所有</p>
    </footer>
