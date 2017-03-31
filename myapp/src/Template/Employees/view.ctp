<?php
/**
 * @var \App\View\AppView $this
 */
$this->assign('title', __('Employees'));
$this->Html->addCrumb(__('View'));
?>
<section id="medical_technology_schools">
    <section id="mainpage">
        <nav class="large-3 medium-4 columns" id="actions-sidebar">
            <ul class="side-nav">
                <li class="heading"><?= __('Actions')?></li>
                <li><?= $this->Html->link(__('Edit Employee'), ['action'=>'edit', $employee->id])?> </li>
                <li><?= $this->Form->postLink(__('Delete Employee'), ['action'=>'delete', $employee->id], ['confirm'=>__('Are you sure you want to delete # {0}?', $employee->id)])?> </li>
                <li><?= $this->Html->link(__('List Employee'), ['action'=>'index'])?> </li>
                <li><?= $this->Html->link(__('New Employee'), ['action'=>'add'])?> </li>
            </ul>
        </nav>
        <div class="articles view large-9 medium-8 columns content">
            <h3><?= h($employee->name)?></h3>
            <table class="vertical-table">

                <tr>
                    <th scope="row"><?= __('Department')?></th>
                    <td><?= $employee->has('department')?$this->Html->link($employee->department->name, ['controller'=>'Departments', 'action'=>'view', $employee->department->id]):''?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Designation')?></th>
                    <td><?= $employee->has('designation')?$this->Html->link($employee->designation->name, ['controller'=>'Designations', 'action'=>'view', $employee->designation->id]):''?></td>
                </tr>

                <tr>
                    <th scope="row"><?= __('Name')?></th>
                    <td><?= h($employee->name)?></td>
                </tr>
                
                <tr>
                    <th scope="row"><?= __('Email')?></th>
                    <td><?= h($employee->email)?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Mobile')?></th>
                    <td><?= h($employee->mobile)?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Birth Date')?></th>
                    <td><?= h($employee->birtdate)?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Gender')?></th>
                    <td><?= h($employee->gender)?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Address')?></th>
                    <td><?= h($employee->address)?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Hobby')?></th>
                    <td><?= h($employee->hobby)?></td>
                </tr>
               <tr>
                    <th scope="row"><?= __('Image')?></th>
                <td><?= $this->Html->image('upload/'.$employee->image,array('height' => '100', 'width' => '100','alt'=>'img')) ?> </td>
                </tr>
                
                <tr>
                    <th scope="row"><?= __('Created')?></th>
                    <td><?= h($employee->created)?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modified')?></th>
                    <td><?= h($employee->modified)?></td>
                </tr>
            </table>
        </div>
    </section></section>
