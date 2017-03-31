<?php
/**
 * @var \App\View\AppView $this
 */
?>
<section id="medical_technology_schools">
    <section id="mainpage">
        <nav class="large-3 medium-4 columns" id="actions-sidebar">
            <ul class="side-nav">
                <li class="heading"><?= __('Actions')?></li>
                <li><?= $this->Html->link(__('List Departments'), ['action'=>'index'])?></li>
                <li><?= $this->Html->link(__('List Employees'), ['controller'=>'Employees', 'action'=>'index'])?></li>
                <li><?= $this->Html->link(__('New Employee'), ['controller'=>'Employees', 'action'=>'add'])?></li>
            </ul>
        </nav>
        <div class="departments form large-9 medium-8 columns content">
            <?= $this->Form->create($department)?>
            <fieldset>
                <legend><?= __('Add Department')?></legend>
                <?php
                echo $this->Form->control('name', array('type'=>'text', 'name'=>'name[][name]', 'id'=>'name', 'style'=>'width:500px;', 'oninvalid'=>'setCustomValidity("Enter Department Name")'));
                ?>adad
                <div class="add_div"> </div>
            </fieldset>
            <?php echo $this->Html->link('Add More', '#', array('style'=>'float:right;', 'class'=>'add_more', 'onclick'=>'Add_More() ;', 'title'=>'Add More'));?> <br><br>
            <?= $this->Form->button(__('Save'));?>
            <?= $this->Form->button('Reset', array('type'=>'reset', 'style'=>'float:right;margin-right:10px;'));?>
            <?= $this->Form->end()?>
        </div>
    </section>
</section>
<script>
    function Add_More ()
    {
        var maxLimit = 2 ;
        var start = 1 ;
        
        if ( start <= maxLimit )
        {
            $ ( ".add_div" ).append ( '<div id="add_more" ><?php echo $this->Form->control('name', array('type'=>'text', 'name'=>'name[][name]', 'required'=>'required', 'style'=>'width:500px;', 'oninvalid'=>'setCustomValidity("Enter Department Name")'));?><?php echo $this->Html->link('Remove', '#', array('onclick'=>'Remove_More() ;', 'title'=>'Remove'));?> <br></div>' ) ;
            start++ ;
        }


    }

    function Remove_More (  )
    {
        $ ( "#add_more" ).remove () ;
    }

</script>
