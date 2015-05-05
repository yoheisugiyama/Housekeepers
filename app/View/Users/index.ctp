
<div class="main">

    <ul class="bxslider">
        <li><?php echo $this->Html->image('top写真_narrow.jpg', array('alt'=>'Generic placeholder image','width'=>'100%')); ?></li>
        <li><?php echo $this->Html->image('top写真_narrow_2.png', array('alt'=>'Generic placeholder image','width'=>'100%')); ?></li>
        <li><?php echo $this->Html->image('top写真_narrow_3.png', array('alt'=>'Generic placeholder image','width'=>'100%')); ?></li>
        <li></li>
    </ul>

</div>


<div class="container">
    <div class="title">
        <h1 id="title">HouseKeepers</h1>
        <h2 id="catchcopy">近所の家事代行人を探し、家事代行を依頼しよう</h2>
    </div>
    <div class="login">

        <h3>今すぐ無料登録!</h3>
        <p>家事代行を依頼したい人はこちら</p>
        <p>
            <?php  echo $this->Form->button('ハウスオーナー登録', array('class'=>'btn btn-lg btn-success','type'=>'submit')); ?>
        </p>
        <p>家事代行をしたい人はこちら</p>
        <p>
            <?php  echo $this->Form->button('ハウスキーパー登録', array('class'=>'btn btn-lg btn-primary', 'type'=>'submit')); ?>
        </p>

    </div>
    <div id="overLayer">
        <h2>会員登録</h2>
        <?php echo $this->Form->create('User', array('action'=>'register'));?>
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


<div class="background_2">
    <div class="container">
    </div>
</div>

<hr>

<div class="row">

    <h3>HouseKeepersは、家事代行依頼人と家事代行人をマッチングさせるサービスです</h3>
    　　 <p>HouseKeepersは、より多くの方々に、安心して安価に家事代行をご利用いただくための</p>
    <p>オンラインプラットフォームです。</p>
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


<div class="background_2">
    <div class="row">
        <h3>ハウスキーパーとは？ハウスオーナーとは？</h3>
        <h4>ハウスキーパーとは</h4>
        <p>
            家事代行をする人のことを言います。当ページの上部にある「ハウスキーパー登録」のページより登録いた
            だいたユーザーはハウスキーパーとなります。ハウスキーパーは、FacebookまたはLinkedIn、運転免許証当
            による本人確認が必要となります。
        </p>
        <h4>ハウスオーナーとは</h4>
        <p>
            家事代行を依頼する人のことを言います。住居は賃貸・購入を問いません。家事代行を依頼したい人であれ
            ばどなたでもハウスオーナー登録が可能です。
        </p>

        <h3>How To Use</h3>
    </div>
</div>


<div class="background">

</div>