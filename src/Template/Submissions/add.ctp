<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Submissions'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="submissions form large-9 medium-8 columns content">
    <?= $this->Form->create($submission) ?>
    <fieldset>
        <legend><?= __('Add Submission') ?></legend>
        <?php
            echo $this->Form->input('contest_id');
            echo $this->Form->input('task_id');
            echo $this->Form->input('user_name');
            echo $this->Form->input('language');
            echo $this->Form->input('score');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
