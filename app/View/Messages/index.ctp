<div class="row">


<div class="private_message">
    <?php
       echo $this->Form->create('Message', array('action'=>'send'));
    ?>
        <table class="table">
            <thead>
             <tr>
                <th><?php  ?></th>
             </tr>   
            </thead>
            <tbody class="message">
            <tr>
                <th><?php echo $this->Form->label('Message.title', '題名'); ?></th>
                <td><?php echo $this->Form->input('title', array('type'=>'textarea','label'=>false, 'cols'=>50, 'rows'=>1)); ?></td>
            </tr>
            <tr>
                <th><?php echo $this->Form->label('Message.message', '内容'); ?></th>
                <td><?php echo $this->Form->input('message', array('type'=>'textarea','label'=>false, 'cols'=>50, 'rows'=>10)); ?></td>
            </tr>
            </tbody>
        </table>
    <?php echo $this->Form->end('送信') ?>
</div>


</div>