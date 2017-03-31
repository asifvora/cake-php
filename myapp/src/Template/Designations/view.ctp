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
        <li><?= $this->Html->link(__('Edit Designation'), ['action' => 'edit', $designation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Designation'), ['action' => 'delete', $designation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Designations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Designation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="designations view large-9 medium-8 columns content">
    <h3><?= h($designation->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($designation->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($designation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($designation->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($designation->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Employees') ?></h4>
        <?php if (!empty($designation->employees)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Department Id') ?></th>
                <th scope="col"><?= __('Designation Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Mobile') ?></th>
                <th scope="col"><?= __('Birtdate') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Hobby') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($designation->employees as $employees): ?>
            <tr>
                <td><?= h($employees->id) ?></td>
                <td><?= h($employees->department_id) ?></td>
                <td><?= h($employees->designation_id) ?></td>
                <td><?= h($employees->name) ?></td>
                <td><?= h($employees->email) ?></td>
                <td><?= h($employees->mobile) ?></td>
                <td><?= h($employees->birtdate) ?></td>
                <td><?= h($employees->gender) ?></td>
                <td><?= h($employees->address) ?></td>
                <td><?= h($employees->hobby) ?></td>
                <td><?= h($employees->image) ?></td>
                <td><?= h($employees->created) ?></td>
                <td><?= h($employees->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Employees', 'action' => 'view', $employees->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Employees', 'action' => 'edit', $employees->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Employees', 'action' => 'delete', $employees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employees->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
      </section>
</section>
