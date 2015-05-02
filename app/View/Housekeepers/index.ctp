<div class="container">

    <div class="search_bar">

        <?php echo $this->Form->create('Housekeeper', array('action'=>'index')); ?>
        <fieldset>
            <legend>検索</legend>
            <?php echo $this->Form->input('station', array('label' => '駅', 'empty' => true)); ?>
            <hr />
            <?php echo $this->Form->select('sex',array('男' => '男', '女' => '女'),array('label'=>true)); ?>
        </fieldset>
        <br>
        <br>
        <?php echo $this->Form->end('検索'); ?>



    </div>

    <div class="pagination">
        <div>
            <h1>ハウスキーパー一覧</h1>
            <p>お目当てのハウスキーパーを探そう!</p>
        </div>
        <hr/>

        <div>
            <?php foreach ($housekeepers as $row): ?>
                <div class="thumb">
                    <p>写真</p>
                </div>

                <div class="summary">
                    <ul>
                        <li><?php echo h($row['Housekeeper']['surname']); ?></li>
                        <li><?php echo h($row['Housekeeper']['sex']); ?></li>
                        <li><?php echo h($row['Housekeeper']['experience']); ?></li>
                        <li><?php echo h($row['Housekeeper']['station']); ?></li>
                    </ul>
                </div>

            <?php endforeach; ?>
        </div>

        <div class="paginator_bottom">
            <?php echo $this->Paginator->counter(); ?><br/>
            <?php echo $this->Paginator->prev('前へ'); ?>
            <?php echo $this->Paginator->numbers(); ?>
            <?php echo $this->Paginator->next('次へ'); ?>
        </div>

    </div>


</div>