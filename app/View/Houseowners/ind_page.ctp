
<div class="row">


    <div class="ind_photo">
        <?php echo $this->Html->image($houseowner['Image']['name'], array('width'=>'300px', 'height'=>'300px')); ?>
    </div>

    <p class="user"><?php echo $user['name']; ?>さん、こんにちは！</p>

    <table class="ind_info table table-striped">
        <caption><?php echo h($houseowner['Houseowner']['surname'].$houseowner['Houseowner']['firstname'] ); ?>の個別ページ</caption>
        <tbody>
        <tr>
            <td class="ind_table_caption">氏</td>
            <td class="ind_table_info"><?php echo h($houseowner['Houseowner']['surname']); ?></td>
        </tr>
        <tr>
            <td>名</td>
            <td><?php echo h($houseowner['Houseowner']['firstname']); ?></td>
        </tr>
        <tr>
            <td>ふりがな（氏）</td>
             <td><?php echo h($houseowner['Houseowner']['furigana_sur']); ?></td>
        </tr>
        <tr>
            <td>ふりがな（名）</td>
            <td><?php echo h($houseowner['Houseowner']['furigana_first']); ?></td>
        </tr>
        <tr>
            <td>性別</td>
            <td><?php echo h($houseowner['Houseowner']['sex']); ?></td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?php echo h($houseowner['Houseowner']['age']); ?></td>
        </tr>
        <tr>
            <td>婚姻ステータス</td>
            <td><?php echo h($houseowner['Houseowner']['marital_status']); ?></td>
        </tr>
        <tr>
            <td>comment</td>
            <td><?php echo h($houseowner['Houseowner']['prefecture']); ?></td>
        </tr>
        <tr>
            <td>コメント</td>
            <td><?php echo h($houseowner['Houseowner']['comment']); ?></td>
        </tr>

        </tbody>
    </table>

</div>

