<?php
/**
  * @var \App\View\AppView $this
  */
?>
<section id="medical_technology_schools">
  <section id="mainpage">
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $department->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $department->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="departments form large-9 medium-8 columns content">
    <?= $this->Form->create($department) ?>
    <fieldset>
        <legend><?= __('Edit Department') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
  </section>
</section>
