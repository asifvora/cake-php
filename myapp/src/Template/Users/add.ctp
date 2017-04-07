<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions')?></li>
        <li><?= $this->Html->link(__('List Users'), ['action'=>'index'])?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user)?>
    <fieldset>
        <legend><?= __('Add User')?></legend>
        <?php
        echo $this->Form->control('name');
        echo $this->Form->control('email');
        echo $this->Form->control('username');
        echo $this->Form->control('password');
        echo $this->Form->control('role', ['empty'=>'Select Role ', 'type'=>'select', 'options'=>array('1'=>'Admin', '2'=>'User')]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Save'), array('formnovalidate'=>true));?>
    <?= $this->Form->end()?>
</div>
