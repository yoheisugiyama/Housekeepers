<div class="row_2">
    <h3>メールアドレスでログイン</h3>
    <?php echo $this->Form->create('User'); ?>
    <?php echo $this->Form->label('User.email', 'Email Address'); ?>
    <?php echo $this->Form->input('User.email', array('label'=>false, 'class'=>'form-control', 'id'=>'exampleInputEmail1', 'placeholder'=>'enter email address')); ?>
    <b><?php echo $this->Form->error('User.email'); ?></b>
    <?php echo $this->Form->label('User.password', 'Password'); ?>
    <?php echo $this->Form->input('User.password', array('label'=>false, 'class'=>'form-control', 'id'=>'exampleInputPassword1', 'placeholder'=>'enter password')); ?>
    <b><?php echo $this->Form->error('User.password'); ?></b>
    <br>
    <div class="button_center col-sm-12">
        <?php  echo $this->Form->button('ログイン', array('class'=>'btn btn-success main-login', 'type'=>'submit')); ?>
    </div>
    <?php echo $this->Form->end() ?>
    <hr>
    <hr>

    <h3>ソーシャルアカウントでログイン</h3>
    <div class="social-login-form">
        <?php echo $this->Form->create('User',array('url'=>'/auth/facebook')); ?>
        <div class="col-sm-6">
        <?php  echo $this->Form->button('<i class="fa fa-facebook"></i>  Facebook', array('class'=>'btn btn-primary facebook-login', 'type'=>'submit')); ?>

        </div>
        <?php echo $this->Form->end() ?>

        <?php echo $this->Form->create('User',array('url'=>'/auth/twitter')); ?>
        <div class="col-sm-6">
        <?php  echo $this->Form->button('<i class="fa fa-twitter"></i>  Twitter', array('class'=>'btn btn-primary twitter-login', 'type'=>'submit')); ?>
        </div>
        <?php echo $this->Form->end() ?>
    </div>



</div>