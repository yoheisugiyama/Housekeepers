<div class="row">


    <?php
       echo $this->Form->create('Message', array('action'=>'send'));
    ?>
        <table>
            <tbody class="message">
            <tr>
                <th><?php echo $this->Form->label('Message.title', '題名'); ?></th>
                <td><?php echo $this->Form->input('title', array('type'=>'text','label'=>false)); ?></td>
            </tr>
            <br>
            <br>
            <tr>
                <th><?php echo $this->Form->label('Message.message', '内容'); ?></th>
                <td><?php echo $this->Form->input('message', array('type'=>'textarea','label'=>false)); ?></td>
            </tr>
            </tbody>
        </table>
    <?php echo $this->Form->end('送信') ?>



</div>