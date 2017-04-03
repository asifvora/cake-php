<?php
/**
 * @var \App\View\AppView $this
 */
$this->assign('title', __('Employees'));
$this->Html->addCrumb(__('Employees'));
?>

<section id="medical_technology_schools">
    <section id="mainpage">
        <?php // echo $getresponse = $this->Breadcrumbs->addCrumb('Employee');   ?>
        <nav class="large-3 medium-4 columns" id="actions-sidebar">
            <ul class="side-nav">
                <li class="heading"><?= __('Actions')?></li>
                <li><?= $this->Html->link(__('New Employee'), ['action'=>'add'])?></li>
                <li><?= $this->Html->link(__('List Departments'), ['controller'=>'Departments', 'action'=>'index'])?></li>
                <li><?= $this->Html->link(__('New Department'), ['controller'=>'Departments', 'action'=>'add'])?></li>
                <li><?= $this->Html->link(__('List Designations'), ['controller'=>'Designations', 'action'=>'index'])?></li>
                <li><?= $this->Html->link(__('New Designation'), ['controller'=>'Designations', 'action'=>'add'])?></li>


            </ul>
        </nav>
        <div class="articles index large-9 medium-8 columns content">
            <h3><?= __('Employees')?></h3>
            <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id')?></th>
                        <th scope="col"><?= $this->Paginator->sort('department')?></th>
                        <th scope="col"><?= $this->Paginator->sort('designation')?></th>
                        <th scope="col"><?= $this->Paginator->sort('name')?></th>
                        <th scope="col"><?= $this->Paginator->sort('email')?></th>
                        <th scope="col"><?= $this->Paginator->sort('mobile')?></th>
                        <th scope="col"><?= $this->Paginator->sort('image')?></th>
                        <th scope="col"><?= $this->Paginator->sort('created')?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified')?></th>
                        <th scope="col" class="actions"><?= __('Actions')?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($employees as $employee):?>
                        <tr>
                            <td><?= $this->Number->format($employee->id)?></td>
                            <td><?= $employee->has('department')?$this->Html->link($employee->department->name, ['controller'=>'Departments', 'action'=>'view', $employee->department->id]):''?></td>
                            <td><?= $employee->has('designation')?$this->Html->link($employee->designation->name, ['controller'=>'Designations', 'action'=>'view', $employee->designation->id]):''?></td>
                            <td><?= h($employee->name)?></td>
                            <td><?= h($employee->email)?></td>
                            <td><?= h($employee->mobile)?></td>
                            <td>
                                <a class="fancybox-effects-d" href="/img/upload/<?php echo $employee->image;?>" title="<?= h($employee->name)?>">
                                    <img src="/img/upload/<?php echo $employee->image;?>" height="100" width="100" alt="Image">
                                </a>
                            </td>
                            <td><?= h($employee->created)?></td>
                            <td><?= h($employee->modified)?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action'=>'view', $employee->id])?>
                                <?= $this->Html->link(__('Edit'), ['action'=>'edit', $employee->id])?>
                                <?= $this->Form->postLink(__('Delete'), ['action'=>'delete', $employee->id], ['confirm'=>__('Are you sure you want to delete # {0}?', $employee->id)])?>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< '.__('first'))?>
                    <?= $this->Paginator->prev('< '.__('previous'))?>
                    <?= $this->Paginator->numbers()?>
                    <?= $this->Paginator->next(__('next').' >')?>
                    <?= $this->Paginator->last(__('last').' >>')?>
                </ul>
                <p><?= $this->Paginator->counter(['format'=>__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')])?></p>
            </div>
        </div>
    </section></section>
