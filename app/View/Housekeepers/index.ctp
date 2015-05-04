<div class="container">

    <div class="search_bar">
        <br>
        <br>
        <?php echo $this->Form->create('Housekeeper', array('action'=>'index')); ?>
        <fieldset>
            <legend>検索</legend>
            <?php echo $this->Form->input('station', array('label' => '駅', 'empty' => true)); ?>
            <hr />
            <legend>性別</legend>
            <?php echo $this->Form->select('Housekeeper.sex',array('男' => '男', '女' => '女')); ?>
        </fieldset>
        <br>
        <br>
        <?php echo $this->Form->end('検索'); ?>


    </div>

    <div class="pagination">
        <div>
            <h1>ハウスキーパー一覧</h1>
            <p>現在Housekeepersに登録しているハウスキーパー（家事代行をする人）の一覧ページです。現在○○人が登録しております。</p>
            <p>お目当てのハウスキーパーを探そう!</p>
        </div>
        <hr/>


            <?php foreach ($housekeepers as $row): ?>
              <div class="housekeeper">
                <div class="thumb">
                    <?php echo $this->Html->image($row['Image'][0]['name'], array('url'=>array('action'=>'ind_page',$row['Image'][0]['housekeeper_id']),'alt'=>'noimages','width'=>'100px', 'height'=>'100px', 'class'=>'thumbphoto')) ?>
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