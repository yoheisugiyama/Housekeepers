
<div class="main">
    <div class="row">
    <div class="title">
        <h1>HouseKeepers</h1>
        <h2>近所の家事代行人を探し、家事代行を依頼しよう</h2>
    </div>
    <div class="login">        
        <?php  echo $this->Form->button('今すぐ新規登録！', array('class'=>'btn btn-lg btn-success register','type'=>'submit')); ?>
    </div>
    </div>
</div>


<div id="overLayer">
    <h3>会員登録</h3>
        <table class="table table-bordered">
            <?php echo $this->Form->create('User', array('action'=>'register'));?>

            <thead>
            <tr>
                <th class="">項目</th>
                <th class="">入力欄</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th><?php echo $this->Form->label('User.name', '名前'); ?></th>
                <td><?php echo $this->Form->input('name', array('label'=>false, 'class'=>'form-control')); ?></td>
            </tr>
            <tr>
                <th><?php echo $this->Form->label('User.email', 'email'); ?></th>
                <td><?php echo $this->Form->input('email', array('label'=>false, 'class'=>'form-control')); ?></td>
            </tr>
            <tr>
                <th><?php echo $this->Form->label('User.username', 'ユーザー名'); ?></th>
                <td><?php echo $this->Form->input('username', array('label'=>false, 'class'=>'form-control')); ?></td>

            </tr>
            <tr>
                <th><?php echo $this->Form->label('User.password', 'パスワード'); ?></th>
                <td><?php echo $this->Form->input('password', array('label'=>false, 'class'=>'form-control')); ?></td>
            </tr>

            <tr>
                <td colspan="2">
                    <?php echo $this->Form->input('User.group_id', array('type'=>'hidden', 'value'=>false, 'id'=>'group_id'));?>
                    <?php echo $this->Form->submit('確認', array('class'=>'btn btn-primary main-login')) ?>
                </td>
            </tr>
            </tbody>
            <?php echo $this->Form->end();?>
        </table>

    <h3>ソーシャルアカウントで登録</h3>
        <div class="social_register">
            <?php echo $this->Form->create('Socialuser', array('url'=>'/auth/facebook'));?>
            <?php $this->Form->hidden('Socialuser.provider', array('value'=>'facebook')); ?>
            <div class="col-lg-6">
                <?php  echo $this->Form->button('<i class="fa fa-facebook"></i>  Facebook', array('class'=>'btn btn-primary facebook-login', 'type'=>'submit')); ?>
            </div>
            <?php echo $this->Form->end();?>
            <?php echo $this->Form->create('Socialuser', array('url'=>'/auth/twitter'));?>
            <div class="col-lg-6">
                <?php  echo $this->Form->button('<i class="fa fa-twitter"></i>  Twitter', array('class'=>'btn btn-primary twitter-login', 'type'=>'submit')); ?>
            </div>
            <?php echo $this->Form->end();?>
        </div>



</div>



<hr>

<div class="row">

    <h3>HouseKeepersは、家事代行依頼人と家事代行人をマッチングさせるサービスです</h3>
    <h4>HouseKeepersは、より多くの方々に、安心して安価に家事代行をご利用いただくための</h4>
    <h4>オンラインプラットフォームです。</h4>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="" alt="" class="koumoku">
            <div class="caption">
                <?php echo $this->Html->image('cleaning_seiketsu.png', array('alt'=>'cleaning_seiketsu')) ?>
                <h4>業界最低水準！1500円〜家事代行を依頼！</h4>
                <p>近年、多くの家事代行業者が登場し、以前に比べて安価になったとは言えるものの１時間２５００円以上するものも多く、高所得者でないと手に届きにくいと言えます。HouseKeepersは家事代行依頼人と家事代行人のマッチングに特化することにより、１時間１５００円〜の家事代行サービスのご利用を実現いたします。</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="" alt="" class="koumoku">
            <div class="caption">
                <?php echo $this->Html->image('cleaning_seiri.png', array('alt'=>'cleaning_seiri')) ?>
                <h4>業界初！安心の直接面接及びトライアル方式</h4>
                <p>家事代行業界初の直接面接及びトライアル方式を採用しております。即ち、家事代行人または家事代行依頼人を検索した後、本契約前に、ご希望に応じてお目当ての面接またはトライアルを打診し、相手がOKであれば実施することが可能です。こうしたステップを踏むことで、より安心して家事代行人、家事代行依頼人との契約に移行できます。</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="" alt="" class="koumoku">
            <div class="caption">
                <?php echo $this->Html->image('souji_ofuro.png', array('alt'=>'souji_ofuro')) ?>
                <h4>今なら会員登録無料!</h4>
                <p>HouseKeepersのサービスは、期間限定で無料でお使いいただけます。</p>
            </div>
        </div>
    </div>
</div>

<hr>


<div class="background">
    <div class="row">
        <h3>ハウスキーパーとは？ハウスオーナーとは？</h3>
        <h4>ハウスキーパーとは</h4>
        <p>
            家事代行をする人のことを言います。当ページの上部にある「ハウスキーパー登録」のページより登録いた
            だいたユーザーはハウスキーパーとなります。ハウスキーパーは、FacebookまたはLinkedIn、運転免許証等
            による本人確認が必要となります。
        </p>
        <h4>ハウスオーナーとは</h4>
        <p>
            家事代行を依頼する人のことを言います。住居は賃貸・購入を問いません。家事代行を依頼したい人であれ
            ばどなたでもハウスオーナー登録が可能です。
        </p>
    </div>
</div>




<div class="background_2">
    <div class="row">
        <h3>How To Use</h3>
        <div class="col-lg-6">
        <dl>
            <dt>ハウスキーパーの場合</dt>
            <dd>ハウスキーパーとして登録する</dd>
            <dd>ハウスオーナーを探す</dd>
            <dd>面談を設定する</dd>
            <dd>トライアルを設定する</dd>

        </dl>
        </div>
        <div class="col-lg-6" >
        <dl>
            <dt>ハウスオーナーの場合</dt>
            <dd>ハウスオーナーとして登録する</dd>
            <dd>ハウスオーナーを探す</dd>
            <dd>面談を設定する</dd>
            <dd>トライアルを設定する</dd>
        </dl>
        </div>
    </div>
</div>