<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Create';
?>

                        <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'CM_Indv_Name')->textInput() ?>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'CM_Co_BRN')->textInput() ?>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'CM_Indv_DOB')->textInput() ?>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <?= $form->field($model, 'CM_Co_Name')->textInput() ?>
                                            </div>
                                        </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'CM_Indv_Citizenship')->textInput() ?>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            
                                            <?= $form->field($model, 'CM_Co_URL')->textInput() ?>
                                            </div>
                                        </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'CM_Indv_NRIC_FIN')->textInput() ?>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <?= $form->field($model, 'CM_Co_General_Email')->textInput() ?>
                                            </div>
                                        </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'CM_Indv_Passport')->textInput() ?>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <?= $form->field($model, 'CM_Co_General_Contact')->textInput() ?>
                                            </div>
                                        </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'CM_Indv_WP_SP_EP')->textInput() ?>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <?= $form->field($model, 'CM_Co_Fax')->textInput() ?>
                                            </div>
                                        </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'CM_Indv_Email')->textInput() ?>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'CM_Co_Rep_Name')->textInput() ?>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'CM_Indv_Mobile')->textInput() ?>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'CM_Co_Rep_Designation')->textInput() ?>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'CM_Address_Line1')->textInput() ?>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'CM_Co_Rep_Email')->textInput() ?>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'CM_Address_Line2')->textInput() ?>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'CM_Co_Rep_Contact')->textInput() ?>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'CM_Address_Postal')->textInput() ?>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <?= $form->field($model, 'CM_Co_Rep_Contact_Ext')->textInput() ?>
                                    </div>
                                </div>
                                                <?= Html::submitButton('Register', ['class' => 'btn btn-info btn-block', 'name' => 'insert-button']) ?>
                                            </div>
                                                                            <?php ActiveForm::end(); ?>

