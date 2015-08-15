<div class="row">

    <div class="thread">
        <ul>
        <?php foreach ($housekeeper as $val): ?>
        <li><?php echo h($val['surname'].$val['firstname'].'さんとのメッセージ') ?></li>
        <?php endforeach; ?>
        </ul>
    </div>


    <div class="messages">
        <table class="table">
            <thead>
            <tr><th colspan="2"><?php echo h($housekeeper[0]['surname'].$housekeeper[0]['firstname'].'さんへのメッセージ') ?></th></tr>
            </thead>

                <?php foreach ($my_messages as $row): ?>
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