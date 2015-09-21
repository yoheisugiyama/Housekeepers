<div class="row">

    <div class="breadcrumb">
        <?php
        $this->Html->addCrumb("ホーム", "/users");
        $this->Html->addCrumb("ハウスキーパー一覧", "/Housekeepers");
        echo $this->Html->getCrumbs(" > ");
        ?>
        <p class="user"><?php echo $user['name']; ?>さん、こんにちは！</p>
    </div>


    <div class="search_bar">
        <h3>検索</h3>
            <?php echo $this->Form->create('Housekeeper', array('action'=>'index')); ?>
        <fieldset>
            <legend>経験年数</legend>
            <?php echo $this->Form->select('Housekeeper.experience',array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9','10' => '10')); ?>
            <br>
            <br>
            <legend>最寄り駅</legend>
            <?php echo $this->Form->input('Housekeeper.station', array('label' => '駅', 'empty' => true)); ?>
            <legend>性別</legend>
            <?php echo $this->Form->select('Housekeeper.sex',array('男' => '男', '女' => '女')); ?>
            <br>
            <br>
        </fieldset>
        <div>
        <br>
        <?php echo $this->Form->end(array('label'=>'検索','class'=>'btn btn-info')); ?>
        </div>
    </div>

    <div class="pagination">
        <div>
            <h3>ハウスキーパー一覧</h3>
            <h3>検索条件：評価５</h3>

            <p>現在Housekeepersに登録しているハウスキーパー（家事代行をする人）の一覧ページです。現在<?php echo $this->Paginator->params()['count']; ?>人がHousekeeperとして登録しております。</p>
            <p>お目当てのハウスキーパーを探そう!</p>
        </div>
        <hr/>



        <div>
            <ul class="housekeeper_row">
                <li class="housekeeper_profile">
                    <div class="photo">
                        <?php echo $this->Html->image('housekeeper.png'); ?>
                    </div>
                    <div class="profile">
                        <h5>遠藤久美</h5>
                        <hr/>
                        <h6>吉祥寺在住！成蹊大学生</h6>
                        <hr/>
                        <h6>料理大好きの大学１年生です！吉祥寺近辺に住んでいるので、中央線、井の頭沿線のご家族様の料理を承ります！</h6>
                        </p>
                    </div>
                </li>
                <li class="housekeeper_profile">
                    <div class="photo">
                        <?php echo $this->Html->image('housekeeper_2.png'); ?>
                    </div>
                    <div class="profile">
                        <h5>小池純平</h5>
                        <hr/>
                        <h6>慶応大学体育会ラグビー部所属！力技得意！</h6>
                        <hr/>
                        <h6>肉体労働得意です！引っ越しのお手伝いいたします！東京都大田区、目黒区、品川区と神奈川県川崎市の引っ越しのお手伝いをいたします！</h6>
                        </p>
                    </div>
                </li>
                <li class="housekeeper_profile">
                    <div class="photo">
                        <?php echo $this->Html->image('housekeeper_3.png'); ?>
                    </div>
                    <div class="profile">
                        <h5>Cary Jensen</h5>
                        <hr/>
                        <h6>ハウスキーパー歴８年のロシア人ベテランハウスキーパー！</h6>
                        <hr/>
                        <h6>ロシア・アメリカ・日本でハウスキーパーを８年間やってきました！各国料理作れます！また、特に水回りを綺麗にするのが得意です！</h6>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        

<!---->
<!--            --><?php //foreach ($housekeepers as $row): ?>
<!--              <div class="housekeeper">-->
<!--                <div class="thumb">-->
<!--                    --><?php
//                         if(!isset($row['Image']['name'])){
//                             echo $this->Html->image('no_image.png', array('url'=>array('action'=>'ind_page',$row['Housekeeper']['id']),'alt'=>'noimages','width'=>'100px', 'height'=>'100px', 'class'=>'thumbphoto')) ;
//                         }else{
//                             echo $this->Html->image($row['Image']['name'], array('url'=>array('action'=>'ind_page',$row['Housekeeper']['id']),'alt'=>'noimages','width'=>'120px', 'height'=>'120px', 'class'=>'thumbphoto')) ;
//                         }
//                    ?>
<!--                    --><?php //?>
<!--                    <ul>      -->
<!--                </div>-->
<!---->
<!--                <div class="summary">-->
<!--                    <ul class="summary_left">-->
<!--                        <li>評価：--><?php //echo h($row['Housekeeper']['reputation']); ?><!--</li>-->
<!--                        <br>-->
<!--                        <li>料金：--><?php //echo h($row['Housekeeper']['salary']); ?><!--円</li>-->
<!--                    </ul>-->
<!--                    <ul class="summary_right">-->
<!--                        <li>性別：　--><?php //echo h($row['Housekeeper']['sex']); ?><!--</li>-->
<!--                        <li>経験年数：　--><?php //echo h($row['Housekeeper']['experience']); ?><!--年</li>-->
<!--                        <li>最寄り駅：　--><?php //echo h($row['Housekeeper']['station']); ?><!--</li>-->
<!--                        <li>コメント：　--><?php //echo h($row['Housekeeper']['appeal']); ?><!--</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--             <br>-->
<!--           -->
<!---->

        <div class="paginator_bottom">
            <?php echo $this->Paginator->counter(); ?><br/>
            <?php echo $this->Paginator->prev('前へ'); ?>
            <?php echo $this->Paginator->numbers(); ?>
            <?php echo $this->Paginator->next('次へ'); ?>
        </div>

    </div>

</div>