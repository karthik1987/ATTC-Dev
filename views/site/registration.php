<?php
$this->registerJsFile('@web/js/otp.js');
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'OTP';
$this->params['breadcrumbs'][] = $this->title;
?>
<script>
    $( document ).ready(function() {
    $('#resend_code').prop("disabled", true);
    setTimeout(function() {
        $('#resend_code').prop("disabled", false); 
    }, 25000);
    });
</script>
<script>
    function btnDisable()
    {
        var cnt = parseInt($('#count').val())+1;
        $('#count').val(cnt);
        $('#resend_code').prop("disabled", true);
    setTimeout(function() {
        $('#resend_code').prop("disabled", false); 
    }, 25000);
    }
</script>

    <section>
    	<div class="container">
        <div class="reg_form col-sm-offset-4 col-sm-5" id="otp">
	<div class="frm">
                <label>Choose Your Client Type</label>
                  </div>
                    <div class="frm frm_select">
                  	<select> 
                      <option value="volvo">Individual</option> <option value="saab">Company</option>
                    </select>
                  </div>
                  <form id="otpform" class="form-horizontal">
                  <div class="frm">
                     <label>Please provide your primary contact for our verification purpose</label>
                  </div> 
                  <div class="frm">
                  	<input type="text" id="otpemail" placeholder="Indv_Mobile# (primary) / Co_Rep_Email (primary)" class="form-control">
                  </div>
              	  <div class="otp_btn frm">
                  	<input type="submit" value="Send One-time Password(OTP) »" id="submit_email" class="btn">
                  </div>
                  </form>
                  <div class=" frm">
                      <label id="info" style="color:#f00;margin-bottom: 10px;">Email sent. Check for OTP code which will be valid for 10 mins.<br></label>
                      <label>Please Key in OTP you’ve received</label>
                  </div>
                  <form id="otpcodeform">
                  <div class=" frm">
                      <input type="text" id="otpcode_check" placeholder="OTP" class="form-control" readonly="" required="">
                  </div>
                  <div class="otp_btn  frm">
                  	<input type="submit" value="Verify OTP »" id="otp_code" class="btn ano_btn">
                  </div>
                  </form>
                  <div class=" frm">
        <span id="resend_otp">
            <form id="otpresendform">

                            <input type="hidden" name="resend_email" id="resend_email" value="">
                            <input type="hidden" name="count" id="count" value="0">
                            <input type="submit" id="resend_code" class="btn ano_btn" value="Resend OTP" onclick="btnDisable()">
            </form>
        </span>
                  </div>
    </div>
        </div>
    </section>
<br>
<br>
<section>
    <div id="myviewer">
	<div class="container">
                <div class="reg_form">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">User Registration</h3>
                    </div>
                    <div class="panel-body">
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
                                            <div class="col-xs-6 col-sm-6 col-md-12 text-center">
                                            <?= Html::submitButton('Register', ['class' => 'btn btn-info', 'name' => 'insert-button']) ?>
                                            </div>
                                </div>
                                                                            <?php ActiveForm::end(); ?>

                    </div>
                                </div>
                            </div>
                    </div>
</div>
</section>
<br>
<br><br>
<script>document.getElementById('myviewer').style.display = "none";</script>
