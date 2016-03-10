<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

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
                            <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-5 control-label">
                                    USER</label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="inputEmail3" placeholder="Username" required="" type="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-5 control-label">
                                    Password</label>
                                <div class="col-sm-7">
                                    <input class="form-control" id="inputPassword3" placeholder="Password" required="" type="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-5 col-sm-7">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Remember me </label> <label>
                                           <a href="">forgot password?</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-offset-5 col-sm-7">
                                    <div class="for_pass">
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="form-group last">
                                <div class="col-sm-offset-5 col-sm-7">
                                    <button type="button" class="btn btn-success btn-sm cus_btn">
                                        Login</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>      
       		</div>
        </div>
    </section>
    <footer id="footer">
    	<p>Design: © 2012 Shingda Construction Pte Ltd. All rights reserved 昇達工程私人有限公司版权所有</p>
    </footer>
