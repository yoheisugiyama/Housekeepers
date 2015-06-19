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


            <?php foreach ($housekeepers as $row): ?>
              <div class="housekeeper">
                <div class="thumb">
                    <ul>       
                    <li><?php echo h($row['Housekeeper']['surname'].$row['Housekeeper']['firstname']); ?>さん</li>
                    </ul>
                    <?php
                         if(!isset($row['Image']['name'])){
                             echo $this->Html->image('no_image.png', array('url'=>array('action'=>'ind_page',$row['Housekeeper']['id']),'alt'=>'noimages','width'=>'100px', 'height'=>'100px', 'class'=>'thumbphoto')) ;
                         }else{
                             echo $this->Html->image($row['Image']['name'], array('url'=>array('action'=>'ind_page',$row['Housekeeper']['id']),'alt'=>'noimages','width'=>'120px', 'height'=>'120px', 'class'=>'thumbphoto')) ;
                         }
                    ?>
                    <?php ?>
                    <ul>      
                </div>

                <div class="summary">
                    <ul class="summary_left">
                        <li>評価：<?php echo h($row['Housekeeper']['reputation']); ?></li>
                        <br>
                        <li>料金：<?php echo h($row['Housekeeper']['salary']); ?>円</li>
                    </ul>
                    <ul class="summary_right">
                        <li>性別：　<?php echo h($row['Housekeeper']['sex']); ?></li>
                        <li>経験年数：　<?php echo h($row['Housekeeper']['experience']); ?>年</li>
                        <li>最寄り駅：　<?php echo h($row['Housekeeper']['station']); ?></li>
                        <li>コメント：　<?php echo h($row['Housekeeper']['appeal']); ?></li>
                    </ul>
                </div>
            </div>
             <br>
           <?php endforeach; ?>


        <div class="paginator_bottom">
            <?php echo $this->Paginator->counter(); ?><br/>
            <?php echo $this->Paginator->prev('前へ'); ?>
            <?php echo $this->Paginator->numbers(); ?>
            <?php echo $this->Paginator->next('次へ'); ?>
        </div>

    </div>

</div>