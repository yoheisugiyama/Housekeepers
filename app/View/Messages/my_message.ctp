<div class="row">

    <div class="thread">
<!--        --><?php //foreach ($housekeeper as $val): ?>
<!--        --><?php //echo $this->Html->link($val['surname'].$val['firstname'].'さんへのメッセージ') ?>
<!--        --><?php //endforeach; ?>

        <p>Thread Under Construction </p>
    </div>


    <div class="messages">
        <table class="table">
            <?php foreach ($my_messages as $row): ?>
            <thead>
            <tr><th colspan="2"><?php echo h($housekeeper['Housekeeper']['surname'].$housekeeper['Housekeeper']['firstname'].'さんへのメッセージ') ?></th></tr>
            </thead>

            <tbody>
            <tr>
                <td>題名</td>
                <td><?php echo h($row['title']); ?></td>
            </tr>
            <tr>
                <td>本文</td>
                <td><?php echo h($row['message']); ?></td>
            </tr>
            </tbody>
            <?php endforeach; ?>
        </table>

    </div>

</div>