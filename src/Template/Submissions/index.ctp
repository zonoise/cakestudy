<?= $this->Form->create('UserNameForm',['url'=>'/submissions/index','type'=>'get']); ?>
<?= $this->Form->input('user_name');?>
<?= $this->Form->button('Submit');?>
<?= $this->Form->end();?>

<div class="submissions index large-9 medium-8 columns content">
    <h3><?= __('Submissions') ?></h3>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('contest_id') ?></th>
                <th><?= $this->Paginator->sort('task_id') ?></th>
                <th><?= $this->Paginator->sort('user_name') ?></th>
                <th><?= $this->Paginator->sort('language') ?></th>
                <th><?= $this->Paginator->sort('score') ?></th>

                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($submissions as $submission): ?>
            <tr>
                <td><?= h($submission->created) ?></td>
                <td><?= h($submission->contest_id) ?></td>
                <td><?= h($submission->task_id) ?></td>
                <td><?= h($submission->user_name) ?></td>
                <td><?= h($submission->language) ?></td>

                <td><?= $this->Number->format($submission->score) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Detail'), $submission->full_url ) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
            <?= $this->Paginator->numbers(['prev'=>'< ' . __('prev') ,'next'=>__('next') . ' >']) ?>

        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
