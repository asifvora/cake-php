
<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Department</h4>
        </div>
        <?= $this->Form->create($department)?>
        <div class="modal-body">
            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Department Name</b></h5></label>
                <div class="input-group col-xs-7">
                    <?php //echo $this->Form->control('name', ['class'=>'form-control']);?>
                    <input type="text" name="name" id="name" value="<?php echo $department->name;?>" class="form-control" />
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <!--            <button class="btn btn-primary" type="submit" onclick="">Save</button>-->
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary'])?>

            <!--            <button type="Reset" class="btn btn-default" >Reset</button>-->
        </div>
        <?= $this->Form->end()?>
    </div>
</div>