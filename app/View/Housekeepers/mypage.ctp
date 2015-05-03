<div class="container">

    <div class="search_bar">

    </div>

    <div class="pagination">

        <div>
            <h1>プロフィール編集</h1>
            <p>プロフィールの基本情報を充実化させて、houseownerの目に止まるページを作りましょう!</p>

        </div>

        <div>
            <h2>基本情報</h2>
            <?php echo $this->Form->create('Housekeeper', array('type'=>'post','class'=>'form-horizontal', 'url'=>array('controller'=>'housekeepers','action'=>'mypage')));  ?>
            <div class="form-group form-group-sm">
                <label class="col-sm-6 control-label" for="formGroupInput">氏</label>
                <label class="col-sm-6 control-label" for="formGroupInput">名</label>
                <br>
                <br>
                <div class="col-sm-6">
                    <?php echo $this->Form->input('Housekeeper.surname', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'氏')); ?>
                </div>
                <div class="col-sm-6">
                    <?php echo $this->Form->input('Housekeeper.firstname', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'名')); ?>
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="col-sm-6 control-label" for="formGroupInput">ニックネーム</label>
                <br>
                <br>
                <div class="col-sm-6">
                    <?php echo $this->Form->input('Housekeeper.nickname', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'ニックネーム')); ?>
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="col-sm-6 control-label" for="formGroupInput">性別</label>
                <br>
                <br>
                <div class="col-sm-6">
                    <?php echo $this->Form->input('Housekeeper.sex', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'性別')); ?>
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="col-sm-6 control-label" for="formGroupInput">ハウスキーパー経験</label>
                <br>
                <br>
                <div class="col-sm-6">
                    <?php echo $this->Form->input('Housekeeper.experience', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'ハウスキーパー経験')); ?>
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="col-sm-6 control-label" for="formGroupInput">対象エリア（都道府県）</label>
                <br>
                <br>
                <div class="col-sm-6">
                    <?php echo $this->Form->input('Housekeeper.prefecture', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'都道府県')); ?>
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="col-sm-6 control-label" for="formGroupInput">対象エリア（駅）</label>
                <br>
                <br>
                <div class="col-sm-6">
                    <?php echo $this->Form->input('Housekeeper.station', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'駅')); ?>
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="col-sm-6 control-label" for="formGroupInput">希望報酬</label>
                <br>
                <br>
                <div class="col-sm-6">
                    <?php echo $this->Form->input('Housekeeper.salary', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'希望報酬')); ?>
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="col-sm-6 control-label" for="formGroupInput">アピール</label>
                <br>
                <br>
                <div class="col-sm-12">
                    <?php echo $this->Form->input('Housekeeper.appeal', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'アピール')); ?>
                </div>
            </div>


            <div class="form-group form-group-sm">
                <?php echo $this->Form->end('プロフィール登録') ?>
            </div>

            <div class="form-group form-group-sm">
                <?php echo $this->Html->link('ファイルアップロード',array('controller'=>'images','action'=>'file_upload')); ?>
            </div>
        </div>


    </div>

</div>