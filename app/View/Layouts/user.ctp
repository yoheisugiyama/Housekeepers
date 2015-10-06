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
            <?php echo $this->Html->image('housekeepers_logo.png', array('alt'=>'Housekeepers', 'class'=>'logo', 'url'=>array('controller'=>'users','action'=>'loginindex'))) ?></li>
        </div>
        <div class="navi">
            <ul class="nav-right_3">
                <li><?php  echo $this->Html->link($this->Html->tag('span','',
                        array('class' => 'glyphicon glyphicon-home')), array('controller'=>'users', 'action'=>'loginindex'), array('escape'=>false, 'class'=>'navbar-link'))?></li>
                <li><?php  echo $this->Html->link($this->Html->tag('span','',
                        array('class' => 'glyphicon glyphicon-envelope')), array('controller'=>'messages', 'action'=>'my_message'), array('escape'=>false, 'class'=>'navbar-link'))?></li>
                <li><?php  echo $this->Html->link($this->Html->tag('span','',
                        array('class' => 'glyphicon glyphicon-bell')), array('controller'=>'', 'action'=>''), array('escape'=>false, 'class'=>'navbar-link'))?></li>
            </ul>
            <ul class="nav-right_2">
                <li><?php  echo $this->Html->tag('span',''.$user['username'].'さん', array('class'=>'username')); ?></li>
                <li><?php echo $this->Html->tag('span', '', array('class'=>'glyphicon glyphicon-chevron-down')); ?></li>
                </li>
                    <ul class="custom_dropdown">
                        <li><?php echo $this->Html->link('ハウスキーパーを探す',array('controller'=>'housekeepers', 'action'=>'index')); ?></li>
                        <li><?php echo $this->Html->link('お気に入りハウスキーパー一覧',array('controller'=>'housekeepers', 'action'=>'index')); ?></li>
                        <li><?php echo $this->Html->link('マイページ',array('controller'=>'users', 'action'=>'mypage')); ?></li>
                        <li><?php echo $this->Html->link('プロフィール編集',array('controller'=>'users', 'action'=>'mypage')); ?></li>
                        <li><?php echo $this->Html->link('メッセージ',array('controller'=>'messages', 'action'=>'my_message')); ?></li>
                        <li>お知らせ</li>
                        <li>設定</li>
                        <li><?php echo $this->Html->link('ログアウト',array('controller'=>'users', 'action'=>'logout')); ?></li>
                    </ul>
            </ul>

<!--            <ul class="nav-right_3">-->
<!--                <li class="nav_btn_2">--><?php // echo $this->Html->link('ハウスキーパーを探す', array('class'=>'navbar-link','controller'=>'housekeepers', 'action'=>'index')) ?><!-- </li>-->
<!--                <li class="nav_btn_2">--><?php // echo $this->Html->link('ハウスオーナーを探す', array('class'=>'navbar-link','controller'=>'houseowners', 'action'=>'index')) ?><!-- </li>-->
<!--            </ul>-->
        </div>
        </ul>
    </div>
</nav>


<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>


<footer>
    <div class="row">
        <ul class="col-lg-4">
            <h5 class=" subpage-title">サービス</h5>
            <li>ハウスキーパー応募</li>
            <li>運営会社</li>
            <li>よくあるご質問</li>
        </ul>
        <ul class="col-lg-4">
            <h5 class=" subpage-title">規約</h5>
            <li>サービス利用規約</li>
            <li>ポイント利用規約</li>
            <li>プライバシーポリシー</li>
            <li>特定商取引法に基づく表示</li>
        </ul>
        <ul class="col-lg-4">
            <h5 class=" subpage-title">FACEBOOK PAGE</h5>
            <li>FACEBOOK PAGE</li>
        </ul>
    </div>
    <p>©Copyright©2015 CreaTive WorkS All Rights Reserved</p>
</footer>


<!-- Placed at the end of the document so the pages load faster -->

<?php echo $this->Html->script('bootstrap.min.js'); ?>
<?php echo $this->Html->script('main.js'); ?>

<?php echo $this->element('sql_dump'); ?>
</body>
</html>