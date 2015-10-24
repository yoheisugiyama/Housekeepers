
<div class="main">
    <div class="row">
        <div class="title">
            <h1>HouseKeepers</h1>
            <h2>近所の家事代行人を探し、家事代行を依頼しよう</h2>
        </div>
<!--        <div class="login">-->
<!---->

<!---->
<!--        </div>-->

        <div class="registration">
         <?php  echo $this->Form->button('ユーザー登録する（無料）', array('class'=>'btn btn-lg btn-success register','id'=>'leanModal', 'href'=>'#div787')); ?>
            <div id="div787">
                <div class="col-sm-12"><?php echo $this->Form->button('法人の方はこちら', array('class'=>'btn btn-lg btn-info register')); ?></div>
                <div class="col-sm-12"><?php echo $this->Form->button('個人の方はこちら', array('class'=>'btn btn-lg btn-info register')); ?></div>
            </div>
        </div>

    </div>
</div>


<div id="overLayer">

    <?php echo $this->Form->button('ハウスオーナー（家事代行依頼人）として登録する', array('class'=>'btn btn-info owner_register'))  ?>
    <br/>
    <br/>
    <?php echo $this->Form->button('ハウスキーパー（家事代行人）として登録する', array('class'=>'btn btn-warning keeper_register'))  ?>


<!--    <h3>会員登録</h3>-->
<!--        <table class="table table-bordered">-->
<!--            --><?php //echo $this->Form->create('User', array('action'=>'register'));?>
<!---->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th class="">項目</th>-->
<!--                <th class="">入力欄</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            <tr>-->
<!--                <th>--><?php //echo $this->Form->label('User.name', '名前'); ?><!--</th>-->
<!--                <td>--><?php //echo $this->Form->input('name', array('label'=>false, 'class'=>'form-control')); ?><!--</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <th>--><?php //echo $this->Form->label('User.email', 'email'); ?><!--</th>-->
<!--                <td>--><?php //echo $this->Form->input('email', array('label'=>false, 'class'=>'form-control')); ?><!--</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <th>--><?php //echo $this->Form->label('User.username', 'ユーザー名'); ?><!--</th>-->
<!--                <td>--><?php //echo $this->Form->input('username', array('label'=>false, 'class'=>'form-control')); ?><!--</td>-->
<!---->
<!--            </tr>-->
<!--            <tr>-->
<!--                <th>--><?php //echo $this->Form->label('User.password', 'パスワード'); ?><!--</th>-->
<!--                <td>--><?php //echo $this->Form->input('password', array('label'=>false, 'class'=>'form-control')); ?><!--</td>-->
<!--            </tr>-->
<!---->
<!--            <tr>-->
<!--                <td colspan="2">-->
<!--                    --><?php //echo $this->Form->input('User.group_id', array('type'=>'hidden', 'value'=>false, 'id'=>'group_id'));?>
<!--                    --><?php //echo $this->Form->submit('確認', array('class'=>'btn btn-primary main-login')) ?>
<!--                </td>-->
<!--            </tr>-->
<!--            </tbody>-->
<!--            --><?php //echo $this->Form->end();?>
<!--        </table>-->
<!---->
<!--    <h3>ソーシャルアカウントで登録</h3>-->
<!--        <div class="social_register">-->
<!--            --><?php //echo $this->Form->create('Socialuser', array('url'=>'/auth/facebook'));?>
<!--            --><?php //$this->Form->hidden('Socialuser.provider', array('value'=>'facebook')); ?>
<!--            <div class="col-lg-6">-->
<!--                --><?php // echo $this->Form->button('<i class="fa fa-facebook"></i>  Facebook', array('class'=>'btn btn-primary facebook-login', 'type'=>'submit')); ?>
<!--            </div>-->
<!--            --><?php //echo $this->Form->end();?>
<!--            --><?php //echo $this->Form->create('Socialuser', array('url'=>'/auth/twitter'));?>
<!--            <div class="col-lg-6">-->
<!--                --><?php // echo $this->Form->button('<i class="fa fa-twitter"></i>  Twitter', array('class'=>'btn btn-primary twitter-login', 'type'=>'submit')); ?>
<!--            </div>-->
<!--            --><?php //echo $this->Form->end();?>
<!--        </div>-->



</div>


<div id="ownerLayer">

    <h4>ソーシャルアカウントで登録</h4>
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
    <br/>
    <br/>

    <h4>ソーシャルアカウントを使わないで登録</h4>
        <?php echo $this->Form->create('User', array('action'=>'register')); ?>
        <?php echo $this->Form->button('登録', array('class'=>'btn btn-success')); ?>
        <?php echo $this->Form->end(); ?>
    </div>
</div>

<div id="keeperLayer">

    <h3>ソーシャルアカウントで登録</h3>
    <div class="social_register">
        <?php echo $this->Form->create('Socialuser', array('url'=>'/auth/facebook'));?>
        <?php echo $this->Form->hidden('Socialuser.provider', array('value'=>'facebook')); ?>
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

    <h3 class="midashi_1">HouseKeepersは、家事代行依頼人と家事代行人をマッチングさせるサービスです</h3>
    <h4 class="midashi_2">HouseKeepersは、より多くの方々に、安心して安価に家事代行をご利用いただくための</h4>
    <h4 class="midashi_2">オンラインプラットフォームです。</h4>

    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="" alt="" class="koumoku">
            <div class="caption">
                <?php echo $this->Html->image('cleaning_seiketsu.png', array('alt'=>'cleaning_seiketsu')) ?>
                <br/>
                <dt>業界最低水準！1,500円〜家事代行を依頼！</dt>
                <br/>
                <dd>HouseKeepersは家事代行依頼人と家事代行人のマッチングに特化することにより、１時間１,５００円〜の家事代行サービスのご利用を実現いたします。</dd>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="" alt="" class="koumoku">
            <div class="caption">
                <?php echo $this->Html->image('cleaning_seiri.png', array('alt'=>'cleaning_seiri')) ?>
                <br/>
                <dt>業界初！安心の直接面接及びトライアル方式</dt>
                <br/>
                <dd>家事代行業界初の直接面接及びトライアル方式を採用しております。本契約前にこうしたステップを踏むことで、より安心して家事代行人、家事代行依頼人との契約に移行できます。</dd>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="" alt="" class="koumoku">
            <div class="caption">
                <?php echo $this->Html->image('souji_ofuro.png', array('alt'=>'souji_ofuro')) ?>
                <br/>
                <dt>今ならプラットフォーム利用料無料でお使いいただけます!</dt>
                <br/>
                <dd>HouseKeepersのサービスは、ユーザー様1,000名に達するまでは、無料でお使いいただけます(ユーザー様1,000名突破後は１回のご利用につき150円の手数料がかかります。）</dd>
            </div>
        </div>
    </div>
</div>

<hr>


<div class="background">
    <div class="row">
        <h3>ハウスキーパーとは？ハウスオーナーとは？</h3>
        <br/>
        <h4>ハウスキーパーとは</h4>
        <p>
            家事代行をする人のことを言います。当ページの上部にある「ハウスキーパー登録」のページより登録いた
            だいたユーザーはハウスキーパーとなります。ハウスキーパーは、FacebookまたはLinkedIn、運転免許証等
            による本人確認が必要となります。
        </p>
        <br/>
        <h4>ハウスオーナーとは</h4>
        <p>
            家事代行を依頼する人のことを言います。住居は賃貸・購入を問いません。家事代行を依頼したい人であれ
            ばどなたでもハウスオーナー登録が可能です。
        </p>
        <br/>
        <br/>
    </div>
</div>




<div class="background_2">
    <div class="row">
        <h3>How To Use</h3>
        <br/>
        <div class="col-lg-6">
            <div class="howtouse">
                <?php echo $this->Html->image('kaiin.png',array('alt'=>'', 'width'=>'100px', 'height'=>'100px')) ?>
            <dl class="howtouse_comment">
                <dt>1. ハウスキーパー、またはハウスオーナーとして登録する</dt>
                <br/>
                <dd>まずは、今すぐ新規登録！より、ハウスキーパー、またはハウスオーナーとして登録いただきます。</dd>
            </dl>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="howtouse">
                <?php echo $this->Html->image('pagination.png',array('alt'=>'', 'width'=>'100px', 'height'=>'100px')) ?>
                <dl class="howtouse_comment">
                <dt>2. 条件に合ううハウスキーパー、またはハウスオーナーを探す</dt>
                <br/>
                <dd>絞り検索機能を存分に使っていただき、条件に合うハウスキーパー、またはハウスオーナーを納得の行くまで探していただきます。</dd>
            </dl>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="howtouse">
                <?php echo $this->Html->image('interview.png',array('alt'=>'', 'width'=>'100px', 'height'=>'100px')) ?>
            <dl class="howtouse_comment">
                <dt>3. 面談を設定する</dt>
                <br/>
                <dd>条件に合うハウスキーパー、ハウスオーナーが見つかりましたら、面談を設定いたします。面談の打診は、ハウスオーナーからハウスキーパーに対してのみならず、ハウスキーパーからハウスオーナーに対しても実施することができます。</dd>
            </dl>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="howtouse">
                <?php echo $this->Html->image('trial.png',array('alt'=>'','width'=>'100px', 'height'=>'100px')) ?>
                <dl class="howtouse_comment">
                <dt>4. トライアルを設定する</dt>
                <br/>
                <dd>面談の結果、お気に入りのハウスキーパー、ハウスオーナーが見つかりましたら、トライアルを設定いたします。トライアルの打診は、ハウスオーナーからハウスキーパーに対してのみならず、ハウスキーパーからハウスオーナーに対しても実施することができます。</dd>
            </dl>
            </div>
        </div>


    </div>
</div>

<div class="background housekeeper_recruit">
    <div class="row">
    <h3>ただいまハウスキーパー絶賛募集中！</h3>
        <?php echo $this->Form->create('User', array('controller'=>'Users', 'action'=>'recruit')) ?>
        <p><?php echo $this->Form->button('詳しくはこちら',array('class'=>'btn btn-lg btn-primary','type'=>'submit')); ?></p>
        <?php echo $this->Form->end() ?>
    </div>
</div>