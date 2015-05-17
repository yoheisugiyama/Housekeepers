
<div class="row">


    <h1>個別ページ</h1>

    <div class="ind_photo">
        <?php echo $this->Html->image($houseowner['Image']['name'], array('width'=>'400px', 'height'=>'300px')); ?>
    </div>
    <div class="ind_info">
        <ul>
            <li>氏名：<?php echo h($houseowner['Houseowner']['surname']); ?></li>
            <li>名前：<?php echo h($houseowner['Houseowner']['firstname']); ?></li>
            <li>ふりがな（氏）：<?php echo h($houseowner['Houseowner']['furigana_sur']); ?></li>
            <li>ふりがな（名）：<?php echo h($houseowner['Houseowner']['furigana_first']); ?></li>
            <li>性別：<?php echo h($houseowner['Houseowner']['sex']); ?></li>
            <li>年齢：<?php echo h($houseowner['Houseowner']['age']); ?></li>
            <li>誕生日：<?php echo h($houseowner['Houseowner']['birthday']); ?></li>
            <li>婚姻ステータス：<?php echo h($houseowner['Houseowner']['marital_status']); ?></li>
            <li>住まいの位置する県：<?php echo h($houseowner['Houseowner']['prefecture']); ?></li>
            <li>コメント：<?php echo h($houseowner['Houseowner']['comment']); ?></li>
        </ul>
    </div>

</div>

