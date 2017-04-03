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
        <li><?= $this->Html->link(__('List Designations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="designations form large-9 medium-8 columns content">
    <?= $this->Form->create($designation,['id'=>'form']);?>
    <fieldset>
        <legend><?= __('Add Designation') ?></legend>
        <?php
            echo $this->Form->control('name',[ 'class'=>'validate[required]']);
        ?>
        <?php
            echo $this->Form->control('test',[ 'class'=>'validate[required]']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), array('formnovalidate' => true)); ?>
    <?= $this->Form->end() ?>
</div>
</section>
</section>
