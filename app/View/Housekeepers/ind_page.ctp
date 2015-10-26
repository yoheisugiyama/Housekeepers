

<div class="row">


    <p class="user"><?php echo $user['name']; ?>さん、こんにちは！</p>

    <br/>

    <div class="ind_page">
        <h3> <?php echo h($housekeeper['Housekeeper']['comment']) ?></h3>

        <div class="ind_column">
            <div class="ind_photo">
                <?php echo $this->Html->image($housekeeper['Image']['name'], array('width'=>'300px', 'height'=>'300px')); ?>
            </div>
            <br/>
            <div>
                <h4>ハウスキーパー利用希望日時</h4>
            <hr/>
                <div id="calendar">
                </div>
            </div>
            <br/>
            <div>
                <h4>ご利用料金</h4>
                <hr/>
                <p><?php echo $this->Number->currency($housekeeper['Housekeeper']['salary'], 'JPY'); ?> x ご利用時間</p>
            </div>

            <div>
                <?php echo $this->Form->create('Message', array('action'=>'index')); ?>
                <?php echo $this->Form->input('housekeeper_id', array('type'=>'hidden', 'value'=>$housekeeper['Housekeeper']['id'])); ?>
                <?php echo $this->Form->end(array('label'=>'メッセージを送る','class'=>'btn btn-warning message')); ?>

            </div>
            <br/>
            <br/>
            <div>
                <?php echo $this->Form->create('Houseowner', array('action'=>'housekeeper_request')); ?>
                <?php echo $this->Form->input('housekeeper_request', array('type'=>'hidden', 'value'=>$housekeeper['Housekeeper']['id'])); ?>
                <?php echo $this->Form->end(array('label'=>'予約フォームへ','class'=>'btn btn-success message')); ?>
            </div>

            <br/>
            <br/>

            <div>
                <?php echo $this->Form->create('Message', array('action'=>'index')); ?>
                <?php echo $this->Form->input('housekeeper_id', array('type'=>'hidden', 'value'=>$housekeeper['Housekeeper']['id'])); ?>
                <?php echo $this->Form->end(array('label'=>'面談設定のページへ','class'=>'btn btn-info message')); ?>

            </div>
            <br/>
            <br/>
            <div>
                <?php echo $this->Form->create('Message', array('action'=>'index')); ?>
                <?php echo $this->Form->input('housekeeper_id', array('type'=>'hidden', 'value'=>$housekeeper['Housekeeper']['id'])); ?>
                <?php echo $this->Form->end(array('label'=>'トライアル設定のページへ','class'=>'btn btn-danger message')); ?>

            </div>
            <br/>
            <br/>


        </div>


        <div class="ind_contents">
            <h4>ハウスキーパー <?php echo h($housekeeper['Housekeeper']['surname'].' '.$housekeeper['Housekeeper']['firstname'] ); ?>さんのプロフィール</h4>
            <hr/>
            <table class="ind_info table table-striped">
                <tbody>
                <tr>
                    <td class="ind_table_caption">ハウスキーパー</td>
                     <td class="ind_table_info"><?php echo h($housekeeper['Housekeeper']['surname'].' '.$housekeeper['Housekeeper']['firstname']); ?></td>
                </tr>
                <tr>
                    <td>個人/法人</td>
                    <td><?php echo h($housekeeper['Housekeeper']['attribution']); ?></td>
                </tr>
                <tr>
                    <td>ニックネーム</td>
        　     　   <td><?php echo h($housekeeper['Housekeeper']['nickname']); ?></td>
                </tr>
                <tr>
                    <td>性別</td>
                     <td><?php echo h($housekeeper['Housekeeper']['sex']); ?></td>
                </tr>
                <tr>
                    <td>ハウスキーパー経験年数</td>
                     <td><?php echo h($housekeeper['Housekeeper']['experience']); ?>年</td>
                </tr>
                <tr>
                    <td>得意分野</td>
                    <td><?php echo h($housekeeper['Housekeeper']['advantages']); ?></td>
                </tr>

                </tbody>
            </table>

            <br/>
            <br/>
            <div>
                <h4>自己紹介</h4>
                <hr/>
                <dl>
                    <dt>自己PR</dt>
                    <dd><?php echo h($housekeeper['Housekeeper']['appeal']); ?></dd>
                </dl>
                <dl>
                    <dt>希望時給</dt>
                    <dd><?php echo $this->Number->currency($housekeeper['Housekeeper']['salary'], 'JPY'); ?></dd>

                </dl>
            </div>

            <br/>
            <br/>
            <div>
                <h4>ご利用者の声</h4>
                <hr/>
                <?php foreach ($feedbacks as $row) :?>
                 <dd> <?php echo h($row['Feedback']['feedback_comment']); ?></dd>
                <?php endforeach; ?>

            </div>


    </div>

    </div>
</div>



