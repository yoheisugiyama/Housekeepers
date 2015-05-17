<div class="row">

    <div class="search_bar">
        <h2>検索</h2>
        <?php echo $this->Form->create('Housekeeper', array('action'=>'index')); ?>
        <fieldset>
            <legend>性別</legend>
            <?php echo $this->Form->select('Housekeeper.sex',array('男' => '男', '女' => '女')); ?>
            <br>
            <legend>経験年数</legend>
            <?php echo $this->Form->select('Housekeeper.experience',array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9','10' => '10')); ?>
            <br>
            <legend>最寄り駅</legend>
            <?php echo $this->Form->input('Housekeeper.station', array('label' => '駅', 'empty' => true)); ?>
            <hr />
        </fieldset>
        <br>
        <br>
        <?php echo $this->Form->end('検索'); ?>


    </div>

    <div class="pagination">
        <div>
            <h1>ハウスキーパー一覧</h1>

            <p>現在Housekeepersに登録しているハウスキーパー（家事代行をする人）の一覧ページです。現在<?php echo $this->Paginator->params()['count']; ?>人がHousekeeperとして登録しております。</p>
            <p>お目当てのハウスキーパーを探そう!</p>
        </div>
        <hr/>


            <?php foreach ($housekeepers as $row): ?>
              <div class="housekeeper">
                <div class="thumb">
                    <?php
                         if(!isset($row['Image']['name'])){
                             echo $this->Html->image('no_image.png', array('url'=>array('action'=>'ind_page',$row['Housekeeper']['id']),'alt'=>'noimages','width'=>'100px', 'height'=>'100px', 'class'=>'thumbphoto')) ;
                         }else{
                             echo $this->Html->image($row['Image']['name'], array('url'=>array('action'=>'ind_page',$row['Housekeeper']['id']),'alt'=>'noimages','width'=>'100px', 'height'=>'100px', 'class'=>'thumbphoto')) ;
                         }
                    ?>
                    <?php ?>
                </div>

                <div class="summary">
                    <ol>
                        <li>姓名：　<?php echo h($row['Housekeeper']['surname']); ?></li>
                        <li>性別：　<?php echo h($row['Housekeeper']['sex']); ?></li>
                        <li>経験年数：　<?php echo h($row['Housekeeper']['experience']); ?></li>
                        <li>最寄り駅：　<?php echo h($row['Housekeeper']['station']); ?></li>
                    </ol>
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