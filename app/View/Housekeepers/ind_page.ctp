<h1>個別ページ</h1>

<?php echo $this->Html->image($housekeeper['Image'][0]['name'], array('width'=>'400px', 'height'=>'300px')); ?>

<ul>
    <li><?php echo h($housekeeper['Housekeeper']['surname']); ?></li>
    <li><?php echo h($housekeeper['Housekeeper']['firstname']); ?></li>
    <li><?php echo h($housekeeper['Housekeeper']['nickname']); ?></li>
    <li><?php echo h($housekeeper['Housekeeper']['sex']); ?></li>
    <li><?php echo h($housekeeper['Housekeeper']['experience']); ?></li>
    <li><?php echo h($housekeeper['Housekeeper']['prefecture']); ?></li>
    <li><?php echo h($housekeeper['Housekeeper']['station']); ?></li>
    <li><?php echo h($housekeeper['Housekeeper']['salary']); ?></li>
    <li><?php echo h($housekeeper['Housekeeper']['appeal']); ?></li>
</ul>

