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
    <?php echo $this->Html->css('fullcalendar.min', null, array("screen, projection")); ?>
    <?php echo $this->Html->css('style', null, array("screen, projection")); ?>

    <!-- Fontawesome CSS -->

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- <link href="css/carousel.css" rel="stylesheet"> -->

    <!--[if IE]>
    <?php echo $this->Html->css('ie', null, array('media'=>"screen, projection")); ?>
    <![endif]-->

    <!-- Custom styles for this template -->

    <?php echo $this->Html->script('jquery-1.11.2.js'); ?>
    <script src='/cakephp-2.7.3/js/moment.min.js'></script>
    <script src='/cakephp-2.7.3/js/fullcalendar.js'></script>

</head>

<body>



<nav class="navbar navbar-default navbar-fixed-top">
    <div class="row">
        <div class="logo">
        <?php echo $this->Html->image('housekeepers_logo.png', array('alt'=>'Housekeepers', 'class'=>'logo', 'url'=>array('controller'=>'users','action'=>'index'))) ?>
        </div>
        <div class="navi">
            <ul class="nav-right">
                <li class="nav_btn"><?php  echo $this->Html->link('ログイン', array('class'=>'navbar-link','controller'=>'users', 'action'=>'login')) ?> </li>
                <li class="nav_btn"><?php  echo $this->Html->link('ログアウト', array('class'=>'navbar-link','controller'=>'users', 'action'=>'logout')) ?> </li>
                <li class="nav_btn"><?php  echo $this->Html->link('ホーム', array('class'=>'navbar-link','controller'=>'users', 'action'=>'index')) ?> </li>
                <li class="nav_btn"><?php  echo $this->Html->link('マイページ', array('class'=>'navbar-link','controller'=>'users', 'action'=>'mypage')) ?> </li>
                <li class="nav_btn"><?php  echo $this->Html->link('Message', array('class'=>'navbar-link','controller'=>'messages', 'action'=>'my_message')) ?> </li>
            </ul>
            <ul class="nav-right">
                <li class="nav_btn_2"><?php  echo $this->Html->link('ハウスキーパーを探す', array('class'=>'navbar-link','controller'=>'housekeepers', 'action'=>'index')) ?> </li>
                <li class="nav_btn_2"><?php  echo $this->Html->link('ハウスオーナーを探す', array('class'=>'navbar-link','controller'=>'houseowners', 'action'=>'index')) ?> </li>
            </ul>
        </div>
        </ul>
    </div>
</nav>


<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>

<footer>
        <p>©Copyright©2015 CreaTive WorkS All Rights Reserved</p>
</footer>

<!-- Placed at the end of the document so the pages load faster -->

<?php echo $this->Html->script('bootstrap.min.js'); ?>
<?php echo $this->Html->script('main.js'); ?>

<?php echo $this->element('sql_dump'); ?>
</body>
</html>