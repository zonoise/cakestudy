<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Submission'), ['action' => 'edit', $submission->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Submission'), ['action' => 'delete', $submission->id], ['confirm' => __('Are you sure you want to delete # {0}?', $submission->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Submissions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Submission'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="submissions view large-9 medium-8 columns content">
    <h3><?= h($submission->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Contest Id') ?></th>
            <td><?= h($submission->contest_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Task Id') ?></th>
            <td><?= h($submission->task_id) ?></td>
        </tr>
        <tr>
            <th><?= __('User Name') ?></th>
            <td><?= h($submission->user_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Language') ?></th>
            <td><?= h($submission->language) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($submission->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Score') ?></th>
            <td><?= $this->Number->format($submission->score) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($submission->created) ?></td>
        </tr>
    </table>
</div>
