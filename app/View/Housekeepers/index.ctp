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
                <?php for($i=0; $i<3; $i++) : ?>
                <li class="housekeeper_profile">
                    <div class="photo">
                        <?php
                        if(!isset($housekeepers[$i]['Image']['name'])){
                            echo $this->Html->image('no_image.png', array('url'=>array('action'=>'ind_page',$housekeepers[$i]['Housekeeper']['id']),'alt'=>'noimages')) ;
                        }else{
                            echo $this->Html->image($housekeepers[$i]['Image']['name'], array('url'=>array('action'=>'ind_page',$housekeepers[$i]['Housekeeper']['id']),'alt'=>'noimages')) ;
                        }
                        ?>
                        <?php ?>
                    </div>
                    <div class="profile">
                        <h5><?php echo h($housekeepers[$i]['Housekeeper']['surname'].$housekeepers[$i]['Housekeeper']['firstname']); ?></h5>
                        <hr/>
                        <h6><?php echo h($housekeepers[$i]['Housekeeper']['comment']); ?></h6>
                        <hr/>
                        <h6><?php echo h($housekeepers[$i]['Housekeeper']['appeal']); ?></h6>
                        </p>
                    </div>
                </li>
                <?php endfor; ?>
            </ul>
        </div>



        <div class="paginator_bottom">
            <?php echo $this->Paginator->counter(); ?><br/>
            <?php echo $this->Paginator->prev('前へ'); ?>
            <?php echo $this->Paginator->numbers(); ?>
            <?php echo $this->Paginator->next('次へ'); ?>
        </div>

    </div>

</div>