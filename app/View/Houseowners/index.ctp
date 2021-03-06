<div class="row">

   <div class="breadcrumb">
        <?php
        $this->Html->addCrumb("ホーム", "/users");
        $this->Html->addCrumb("ハウスオーナー一覧", "/Houseowners");
        echo $this->Html->getCrumbs(" > ");
        ?>
    </div>

    <div class="row_left">
    <div class="search_bar">
        <h3>検索</h3>
        <?php echo $this->Form->create('Houseowner', array('action'=>'index')); ?>
        <fieldset>
            <legend>年齢</legend>
            <?php echo $this->Form->input('Houseowner.age', array('label' => '年齢', 'empty' => true)); ?>
            <br>
            <br>
            <legend>性別</legend>
            <?php echo $this->Form->select('Houseowner.sex',array('男' => '男', '女' => '女')); ?>
            <br>
            <br>
            <legend>住まいの属する県</legend>
            <?php echo $this->Form->input('Houseowner.prefecture', array('label' => '県', 'empty' => true)); ?>
        </fieldset>
        <div>
        <br>
        <?php echo $this->Form->end(array('label'=>'検索','class'=>'btn btn-info')); ?>
        </div>
    </div>
    </div>

    <div class="row_right">
     <div class="pagination">
        <div>
            <h3>ハウスオーナー一覧</h3>
            <p>現在Housekeepersに登録しているハウスオーナー（家事代行を依頼する人）の一覧ページです。現在<?php echo $this->Paginator->params()['count']; ?>人がHouseownerとして登録しております。</p>
            <p>お目当てのハウスキーパーを探そう!</p>
        </div>
        <hr/>


        <?php foreach ($Houseowners as $row): ?>
            <div class="houseowner">
                <div class="thumb">
                    <?php
                    if(!isset($row['Image']['name'])){
                        echo $this->Html->image('no_image.png', array('url'=>array('action'=>'ind_page',$row['Houseowner']['id']),'alt'=>'noimages','width'=>'120px', 'height'=>'120px', 'class'=>'thumbphoto')) ;
                    }else{
                        echo $this->Html->image($row['Image']['name'], array('url'=>array('action'=>'ind_page',$row['Houseowner']['id']),'alt'=>'noimages','width'=>'120px', 'height'=>'120px', 'class'=>'thumbphoto')) ;
                    }
                    ?>
                    <?php ?>
                </div>

                <div class="summary">
                    <ol>
                        <li>姓名：　<?php echo h($row['Houseowner']['surname']); ?></li>
                        <li>性別：　<?php echo h($row['Houseowner']['sex']); ?></li>
                        <li>年齢：　<?php echo h($row['Houseowner']['age']); ?></li>
                        <li>住んでいる県：　<?php echo h($row['Houseowner']['prefecture']); ?></li>
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


</div>