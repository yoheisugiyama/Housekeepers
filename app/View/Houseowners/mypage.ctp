<div class="container">
    <div class="ind_photo">
        <?php if(!$houseowner['Image']['name']){

        } else{
            echo $this->Html->image($houseowner['Image']['name'], array('width'=>'300px', 'height'=>'300px'));
        } ?>


    </div>

    <div class="pagination">
        <div>
            <h1>プロフィール編集</h1>
            <p>プロフィールの基本情報を充実化させて、Housekeeperの目に止まるページを作りましょう!</p>
        </div>

        <div>
            <h2>基本情報</h2>
            <?php echo $this->Form->create('Houseowner', array('type'=>'post','class'=>'form-horizontal', 'url'=>array('controller'=>'Houseowners','action'=>'mypage')));  ?>
            <div class="form-group form-group-sm">
                <label class="col-sm-6 control-label" for="formGroupInput">氏</label>
                <label class="col-sm-6 control-label" for="formGroupInput">名</label>
                <br>
                <br>
                <div class="col-sm-6">
                    <?php echo $this->Form->input('Houseowner.surname', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'氏')); ?>
                </div>
                <div class="col-sm-6">
                    <?php echo $this->Form->input('Houseowner.firstname', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'名')); ?>
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="col-sm-6 control-label" for="formGroupInput">性別</label>
                <br>
                <br>
                <div class="col-sm-6">
                    <?php echo $this->Form->input('Houseowner.sex', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'性別')); ?>
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="col-sm-6 control-label" for="formGroupInput">年齢</label>
                <br>
                <br>
                <div class="col-sm-6">
                    <?php echo $this->Form->input('Houseowner.age', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'年齢')); ?>
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="col-sm-6 control-label" for="formGroupInput">対象エリア（都道府県）</label>
                <br>
                <br>
                <div class="col-sm-6">
                    <?php echo $this->Form->input('Houseowner.prefecture', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'都道府県')); ?>
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="col-sm-6 control-label" for="formGroupInput">結婚ステータス</label>
                <br>
                <br>
                <div class="col-sm-6">
                    <?php echo $this->Form->input('Houseowner.marital_status', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'結婚ステータス')); ?>
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="col-sm-6 control-label" for="formGroupInput">アピール</label>
                <br>
                <br>
                <div class="col-sm-12">
                    <?php echo $this->Form->input('Houseowner.comment', array('type'=>'text', 'label'=>false,'required'=>false, 'class'=>'form-control', 'id'=>'formGroupInput', 'placeholder'=>'コメント')); ?>
                </div>
            </div>


            <div class="form-group form-group-sm">
                <?php echo $this->Form->input('Houseowner.user_id', array('type'=>'hidden', 'value'=>$user_id)) ?>
                <?php echo $this->Form->end(array('label'=>'プロフィール登録','class'=>'btn btn-primary')); ?>
            </div>

            <div class="form-group form-group-sm">
                <?php echo $this->Html->link('ファイルアップロード',array('controller'=>'images','action'=>'file_upload')); ?>
            </div>



        </div>
    </div>

</div>