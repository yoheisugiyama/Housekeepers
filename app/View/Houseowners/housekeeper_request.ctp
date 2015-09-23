<div class="container">
<div class="housekeeper_request">
    <div>
        <h4><?php echo h($housekeeper['Housekeeper']['surname'].$housekeeper['Housekeeper']['firstname'].'さんへのハウスキーパー依頼'); ?></h4>
        <hr/>
        <p><?php echo h($housekeeper['Housekeeper']['surname'].$housekeeper['Housekeeper']['firstname'].'さんへのハウスキーパー依頼'); ?>をするにあたり、以下のプロフィールを完成させる必要があります。</p>
    </div>

    <br/>
    <br/>
    <div class="profile">
        <div>
            <h4>プロフィール編集</h4>
        </div>
        <hr/>
        <div>
            <ul class="tab">
                <li><a href="#tab1" class="selected">基本情報</a></li>
                <li><a href="#tab2">写真</a></li>
                <li><a href="#tab3">Facebook情報</a></li>
                <li><a href="#tab4">自己PR</a></li>
                <li><a href="#tab5">その他</a></li>
            </ul>
            <ul class="panel">
                <li id="tab1">
                    <?php echo $this->Form->create('Houseowner', array('type'=>'post','class'=>'form-horizontal', 'url'=>array('controller'=>'Houseowners','action'=>'mypage')));  ?>
                    <div class="form-group form-group-sm">
                        <label class="col-sm-4 control-label" for="formGroupInput">お名前*</label>
                        <div class="col-sm-4">
                            <?php echo $this->Form->input('Houseowner.surname', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'氏')); ?>
                        </div>
                        <div class="col-sm-4">
                            <?php echo $this->Form->input('Houseowner.firstname', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'名')); ?>
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="col-sm-4 control-label" for="formGroupInput">性別</label>
                        <div class="col-sm-4">
                            <?php echo $this->Form->radio('Houseowner.sex', array('1'=>"男性 ", '2'=>"女性 "), array('legend' => false)); ?>
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="col-sm-4 control-label" for="formGroupInput">年齢</label>
                        <div class="col-sm-4">
                            <?php echo $this->Form->input('Houseowner.age', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'年齢')); ?>
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="col-sm-4 control-label" for="formGroupInput">対象エリア（都道府県）</label>
                        <div class="col-sm-4">
                            <?php echo $this->Form->input('Houseowner.prefecture', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'都道府県')); ?>
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="col-sm-4 control-label" for="formGroupInput">結婚ステータス</label>
                        <div class="col-sm-4">
                            <?php echo $this->Form->input('Houseowner.marital_status', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'結婚ステータス')); ?>
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="col-sm-4 control-label" for="formGroupInput">アピール</label>
                        <div class="col-sm-8">
                            <?php echo $this->Form->input('Houseowner.comment', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'コメント')); ?>
                        </div>
                    </div>


                    <div class="form-group form-group-sm">
                        <?php echo $this->Form->input('Houseowner.user_id', array('type'=>'hidden', 'value'=>$user_id)) ?>
                        <?php echo $this->Form->end(array('label'=>'プロフィール登録','class'=>'btn btn-primary')); ?>
                    </div>
                </li>

                <li id="tab2">
                    <div class="form-group form-group-sm">
                        <?php echo $this->Html->link('ファイルアップロード',array('controller'=>'images','action'=>'file_upload')); ?>
                    </div>
                </li>
                <li id="tab3">
                    Pellentesque in metus leo. Praesent porta, dolor nec mattis ullamcorper, velit purus mollis enim, nec tincidunt magna massa ornare elit. In ipsum enim, pellentesque vitae gravida ultrices, aliquet nec ante. Mauris sed nunc ut ligula dictum convallis vel et nunc. Aenean eget enim vitae nulla lacinia consequat. Quisque blandit, ante vel sodales sollicitudin, neque ante elementum leo, ut consequat dui risus ut purus. Vestibulum viverra lacus at felis dignissim bibendum. Maecenas interdum nisl eu metus porta luctus. Suspendisse nulla neque, ultricies nec facilisis nec, mollis id sapien. Donec nec quam et felis pulvinar fringilla a non orci. Maecenas tincidunt magna a sem faucibus eu interdum magna aliquam. Suspendisse a diam lorem, nec malesuada sapien. Nam a scelerisque velit. Integer commodo malesuada odio, sit amet rutrum ante viverra ut. In egestas, arcu id pretium tempus, ligula nibh interdum enim, non bibendum velit felis sed augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent augue eros, posuere pharetra pharetra eu, feugiat eu velit.
                </li>
                <li id="tab4">
                    Vestibulum a quam scelerisque odio ultricies mollis eget a leo. Morbi dictum, velit lobortis hendrerit tincidunt, lacus nisl rhoncus felis, commodo sollicitudin magna augue non est. Nunc in felis quis purus dignissim blandit vel ut erat. In hac habitasse platea dictumst. Nullam euismod auctor rhoncus. Proin et sem ac neque placerat vulputate. Nullam consequat purus eget libero posuere pulvinar. Aenean luctus luctus leo nec vehicula. Praesent eleifend nibh sed neque vestibulum hendrerit. Nulla suscipit vehicula sem, quis congue ligula gravida vel. Aliquam risus urna, pretium eget porttitor hendrerit, gravida at libero. Curabitur nec luctus risus. Etiam ullamcorper fringilla nisl hendrerit convallis. Duis in nibh tellus. Donec porta nibh id purus mollis sodales. Nam eget libero vel metus congue ultricies ut vitae nibh. Sed ac justo ac eros luctus ullamcorper ut tincidunt nibh. Fusce dapibus bibendum urna, id tempor turpis sodales sed. Nam dui purus, posuere vel placerat eu, posuere non magna.
                </li>
                <li id="tab5">
                    Vestibulum consequat consequat aliquet. Aenean ut nunc dolor, vel dictum mauris. Proin neque eros, tincidunt at faucibus a, dapibus sit amet tellus. Etiam rutrum pharetra risus porta ullamcorper. Nunc convallis orci at massa suscipit porta. Sed interdum suscipit dui, eu sodales odio fermentum vitae. Nunc vitae dui metus, a laoreet ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed eu mauris mi, non blandit tortor. Ut fringilla cursus justo id porta. Sed in nibh nulla. Aenean consectetur arcu vel eros facilisis ac luctus lectus placerat. Fusce risus dui, adipiscing ut tempus non, malesuada quis velit.
                </li>
        </ul>
        </div>
    </div>

    <div>
        <?php echo $this->Form->create('Houseowner', array('action'=>'housekeeper_request')); ?>
        <?php echo $this->Form->input('housekeeper_request', array('type'=>'hidden', 'value'=>$housekeeper['Housekeeper']['id'])); ?>
        <?php echo $this->Form->end(array('label'=>'保存して予約リクエストへ進む','class'=>'btn btn-success message')); ?>

    </div>
</div>
</div>

