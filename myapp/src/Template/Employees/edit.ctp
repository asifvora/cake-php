<?php
/**
  * @var \App\View\AppView $this
  */
$this->assign('title', __('Employees'));
$this->Html->addCrumb(__('Edit'));
?>
<section id="medical_technology_schools">
  <section id="mainpage">
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $employee->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="articles form large-9 medium-8 columns content">
    <?= $this->Form->create($employee,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Employee') ?></legend>
        <?php
            echo $this->Form->control('department_id', ['options' => $departments]);
            echo $this->Form->control('designation_id', ['options' => $designations]);
            echo $this->Form->control('name');
            echo $this->Form->control('email',['type'=>'email']);
            echo $this->Form->control('mobile',['type'=>'number','length'=>'10','min'=>'0']);
            echo $this->Form->control('birtdate');
            echo $this->Form->control('gender',['type'=>'radio','options' => array('Male' => 'Male', 'Female' => 'Female'),'value'=>$employee->gender]);
            echo $this->Form->control('address',['type'=>'textarea']);
            echo $this->Form->control('hobby',['type'=>'select','multiple'=>'checkbox','options' =>$options, 'value' =>$select]);
            echo $this->Form->control('image',['type'=>'file','name'=>'image','label' => 'Update Profile Picture','value'=>$employee->image]);
            echo $this->Html->image('upload/'.$employee->image,array('height' => '250', 'width' => '250','alt'=>'img')) ;  
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), array('formnovalidate' => true));?>
    <?= $this->Form->end() ?>
</div>
 </section></section>