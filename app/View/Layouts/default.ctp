<!DOCTYPE html>
<html lang="ja">
<head>
    <?php echo $this->Html->charset(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HouseKeepers</title>
    <!--[if lt IE 9]>
    <?php echo $this->Html->script('html5'); ?>
    <![endif]-->

    <!-- Bootstrap core CSS -->
    <?php echo $this->Html->css('bootstrap', null, array('media'=>"screen, projection")); ?>
    <?php echo $this->Html->css('style', null, array("screen, projection")); ?>


    <!-- <link href="css/carousel.css" rel="stylesheet"> -->

    <!--[if IE]>
    <?php echo $this->Html->css('ie', null, array('media'=>"screen, projection")); ?>
    <![endif]-->

    <!-- Custom styles for this template -->

<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="row">
        <?php echo $this->Html->image('housekeepers_logo.png', array('alt'=>'Housekeepers', 'class'=>'logo', 'url'=>array('controller'=>'users','action'=>'index'))) ?>
        <ul class="nav">
            <li><?php  echo $this->Html->link('ログイン', array('class'=>'navbar-link','controller'=>'users', 'action'=>'login')) ?> </li>
            <li><?php  echo $this->Html->link('ログアウト', array('class'=>'navbar-link','controller'=>'users', 'action'=>'logout')) ?> </li>
            <li><?php  echo $this->Html->link('ホーム', array('class'=>'navbar-link','controller'=>'users', 'action'=>'index')) ?> </li>
            <li><?php  echo $this->Html->link('ハウスキーパー', array('class'=>'navbar-link','controller'=>'housekeepers', 'action'=>'index')) ?> </li>
        </ul>
    </div>
</nav>

<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>

<footer>
    <div class="row">
        <p>©Copyright©2015 CreaTive WorkS All Rights Reserved</p>
    </div>
</footer>

<!-- Placed at the end of the document so the pages load faster -->
<?php echo $this->Html->script('jquery-1.11.2.js'); ?>
<?php echo $this->Html->script('main.js'); ?>
<?php echo $this->Html->script('bootstrap.min.js'); ?>
<?php echo $this->Html->script('jquery.bxslider.min.js'); ?>


<?php echo $this->element('sql_dump'); ?>
</body>
</html>