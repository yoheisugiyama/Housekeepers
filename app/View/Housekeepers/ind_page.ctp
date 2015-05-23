
<div class="row">

    <p class="user"><?php echo $user['name']; ?>さん、こんにちは！</p>


    <div class="ind_page">
    <div class="ind_photo">
    <?php echo $this->Html->image($housekeeper['Image']['name'], array('width'=>'300px', 'height'=>'300px')); ?>
    </div>


    <div class="ind_contents">
        <table class="ind_info table table-striped">
        <caption><?php echo h($housekeeper['Housekeeper']['surname'].$housekeeper['Housekeeper']['firstname'] ); ?>の個別ページ</caption>
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
        <tr>
            <td>希望時給</td>
             <td><?php echo h($housekeeper['Housekeeper']['salary']); ?></td>
        </tr>
        <tr>
            <td>自己PR</td>
             <td><?php echo h($housekeeper['Housekeeper']['appeal']); ?></td>
        </tr>

        </tbody>
         </table>
        
     <div>
         <?php echo $this->Form->create('Message', array('action'=>'index')); ?>

         <?php echo $this->Form->input('sendee_id', array('type'=>'hidden', 'value'=>$housekeeper['Housekeeper']['id'])); ?>


         <?php echo $this->Form->end(array('label'=>'メッセージを送る','class'=>'btn btn-warning message')); ?>


     </div>

    </div>

    </div>
</div>

