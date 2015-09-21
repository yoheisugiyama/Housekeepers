
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

            <div id="fc1" class="fc"></div>

        </div>


        <div class="ind_contents">
            <table class="ind_info table table-striped">
                <caption>ハウスキーパー<?php echo h($housekeeper['Housekeeper']['surname'].$housekeeper['Housekeeper']['firstname'] ); ?>さんのプロフィール</caption>
                <tbody>
                <tr>
                    <td class="ind_table_caption">氏</td>
                     <td class="ind_table_info"><?php echo h($housekeeper['Housekeeper']['surname']); ?></td>
                </tr>
                <tr>
                    <td>名</td>
                     <td><?php echo h($housekeeper['Housekeeper']['firstname']); ?></td>
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
                     <td><?php echo h($housekeeper['Housekeeper']['experience']); ?></td>
                </tr>
                </tbody>
            </table>

            <br/>
            <br/>
            <div>
                <h4>自己紹介</h4>
                <dl>
                    <dt>自己PR</dt>
                    <dd><?php echo h($housekeeper['Housekeeper']['appeal']); ?></dd>
                </dl>
                <dl>
                    <dt>希望時給</dt>
                    <dd><?php echo $this->Number->currency($housekeeper['Housekeeper']['salary'], 'JPY'); ?></dd>

                </dl>
            </div>
     <div>
         <?php echo $this->Form->create('Message', array('action'=>'index')); ?>

         <?php echo $this->Form->input('sendee_id', array('type'=>'hidden', 'value'=>$housekeeper['Housekeeper']['id'])); ?>


         <?php echo $this->Form->end(array('label'=>'メッセージを送る','class'=>'btn btn-warning message')); ?>


     </div>

    </div>

    </div>
</div>

