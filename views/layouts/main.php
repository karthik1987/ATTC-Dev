<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Menu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>
<?php $this->beginBody() ?>
    
<div class="container">
		<div class="header">    
            <div class="col-md-2 col-xs-12 logo">
                <img src="http://ntpl.workstaging.com/ATTC-Designs/1/images/logo.png" class="img-responsive" alt="logo"> 
            </div>
            <div class="col-md-10 col-xs-12 menu">
                <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a class="navbar-brand" href="#">Menu</a></div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="defaultNavbar1">
          <?php
          echo Menu::widget([
    'items' => [
        // Important: you need to specify url as 'controller/action',
        // not just as 'controller' even if default action is used.
        ['label' => 'Home', 'url' => ['site/index']],
        ['label' => 'About Us', 'url' => ['site/index']],
        ['label' => 'Gallery', 'url' => ['site/index']],
        ['label' => 'Services', 'url' => ['site/index']],
        ['label' => 'Tutorials', 'url' => ['site/index']],
        ['label' => 'Contact Us', 'url' => ['site/index']],

    ],
              
	'options' => [
					'class' => 'navbar-nav nav',
				],
]);
          ?>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
            </div>
            
       </div>
  </div>
    
        <?= $content ?>

<footer id="footer">
    	<p>Design: © 2012 Shingda Construction Pte Ltd. All rights reserved 昇達工程私人有限公司版权所有</p>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
