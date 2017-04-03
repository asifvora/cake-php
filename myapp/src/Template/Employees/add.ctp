<?php
/**
 * @var \App\View\AppView $this
 */
$this->assign('title', __('Employees'));
$this->Html->addCrumb(__('Add'));
?>
<section id="medical_technology_schools">
    <section id="mainpage">

        <nav class="large-3 medium-4 columns" id="actions-sidebar">
            <ul class="side-nav">
                <li class="heading"><?= __('Actions')?></li
                <li><?= $this->Html->link(__('List Employees'), ['action'=>'index'])?></li>
            </ul>
        </nav>
        <div class="articles form large-9 medium-8 columns content">
            <?= $this->Form->create($employee, ['type'=>'file', 'id'=>'form'])?>
            <fieldset>

                <legend><?= __('Add Employee')?></legend>
                <?php
                echo $this->Form->control('department_id', ['empty'=>'Select Department', 'options'=>$departments, 'class'=>'validate[required]']);
                echo $this->Form->control('designation_id', ['empty'=>'Select Designation', 'options'=>$designations, 'class'=>'validate[required]']);
                echo $this->Form->control('name');
                echo $this->Form->control('email', ['type'=>'email', 'class'=>'validate[required]']);
                echo $this->Form->control('mobile', ['class'=>'validate[required]']);
                echo $this->Form->control('birtdate', ['class'=>'validate[required]']);
                echo $this->Form->control('gender', ['type'=>'radio', 'options'=>array('1'=>'Male', '2'=>'Female'), 'class'=>'validate[required]']);
                echo $this->Form->control('address', ['type'=>'textarea', 'class'=>'validate[required]']);
                echo $this->Form->control('hobby', ['type'=>'select', 'multiple'=>'checkbox', 'options'=>$options, 'class'=>'validate[required]']);
                echo $this->Form->control('image', ['type'=>'file', 'name'=>'image', 'label'=>'Update Profile Picture', 'class'=>'validate[required]']);
                ?>
            </fieldset>

            <?= $this->Form->button(__('Submit'), array('formnovalidate'=>true));?>
            <?= $this->Form->button('Reset', array('type'=>'reset'));?>
            <?= $this->Form->end()?>
        </div>
    </section>
</section>