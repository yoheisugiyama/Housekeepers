
<div class="row">
	

<h1>個別ページ</h1>

<div class="ind_photo">
<?php echo $this->Html->image($housekeeper['Image']['name'], array('width'=>'400px', 'height'=>'300px')); ?>
</div>
<div class="ind_info">
<ul>
    <li>氏名：<?php echo h($housekeeper['Housekeeper']['surname']); ?></li>
    <li>名前：<?php echo h($housekeeper['Housekeeper']['firstname']); ?></li>
    <li>ニックネーム：<?php echo h($housekeeper['Housekeeper']['nickname']); ?></li>
    <li>性別：<?php echo h($housekeeper['Housekeeper']['sex']); ?></li>
    <li>ハウスキーパー経験年数：<?php echo h($housekeeper['Housekeeper']['experience']); ?></li>
    <li>住所が所属する県：<?php echo h($housekeeper['Housekeeper']['prefecture']); ?></li>
    <li>最寄り駅：<?php echo h($housekeeper['Housekeeper']['station']); ?></li>
    <li>希望時給：<?php echo h($housekeeper['Housekeeper']['salary']); ?></li>
    <li>アピール：<?php echo h($housekeeper['Housekeeper']['appeal']); ?></li>
</ul>
</div>

</div>

