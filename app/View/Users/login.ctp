<div class="container">
    <h3>ログイン</h3>
    <?php echo $this->Form->create('User'); ?>
    <?php echo $this->Form->label('User.email', 'Email Address'); ?>
    <?php echo $this->Form->input('User.email', array('label'=>false, 'class'=>'form-control', 'id'=>'exampleInputEmail1', 'placeholder'=>'enter email address')); ?>
    <?php echo $this->Form->label('User.password', 'Password'); ?>
    <?php echo $this->Form->input('User.password', array('label'=>false, 'class'=>'form-control', 'id'=>'exampleInputPassword1', 'placeholder'=>'enter password')); ?>
    <br>
    <div class="button_center">
        <?php  echo $this->Form->button('ログイン', array('class'=>'btn btn-success', 'type'=>'submit')); ?>
    </div>
    <?php echo $this->Form->end() ?>
    <hr>

</div>