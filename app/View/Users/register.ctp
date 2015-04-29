<div class="container">

    <div class="main">

        <h2>会員登録</h2>


        <?php echo $this->Form->create('User');?>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="">項目</th>
                <th class="">入力欄</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th><?php echo $this->Form->label('User.name', '名前'); ?></th>
                <td><?php echo $this->Form->input('name', array('label'=>false)); ?></td>
            </tr>
            <tr>
                <th><?php echo $this->Form->label('User.email', 'email'); ?></th>
                <td><?php echo $this->Form->input('email', array('label'=>false)); ?></td>
            </tr>
            <tr>
                <th><?php echo $this->Form->label('User.username', 'ユーザー名'); ?></th>
                <td><?php echo $this->Form->input('username', array('label'=>false)); ?></td>

            </tr>
            <tr>
                <th><?php echo $this->Form->label('User.password', 'パスワード'); ?></th>
                <td><?php echo $this->Form->input('password', array('label'=>false)); ?></td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <?php echo $this->Form->input('confirmed', array('type'=>'hidden', 'value'=>false));?>
                    <?php echo $this->Form->submit('確認') ?>
                </td>
            </tr>
            </tbody>
        </table>
        <?php echo $this->Form->end();?>

    </div>

</div>