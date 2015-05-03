
<h1>ファイルのアップロード</h1>

<?php


echo $this->Form->create('Image', array('type'=>'file', 'enctype' => 'multipart/form-data'));
echo $this->Form->input('Image', array('label' => false, 'type' => 'file', 'multiple'));
echo $this->Form->submit('登録する', array('name' => 'submit'));
echo $this->Form->end();

?>