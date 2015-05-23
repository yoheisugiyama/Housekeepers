<div class="row">

    <div class="thread">
        <p>こちらはスレッドです（Underconstruction）</p>
    </div>


    <div class="messages">
        <?php foreach ($my_messages as $row): ?>
        <table class="table table-bordered">

            <thead>
            <th></th>
            <th></th>
            </thead>

            <tbody>
            <tr>
                <td>題名</td>
                <td><?php echo h($row['Message']['title']); ?></td>
            </tr>
            <tr>
                <td>本文</td>
                <td><?php echo h($row['Message']['message']); ?></td>
            </tr>
            </tbody>

        </table>
        <?php endforeach; ?>
    </div>

</div>