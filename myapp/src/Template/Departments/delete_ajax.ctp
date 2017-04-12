
<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Conform Delete</h4>
        </div>
        <div class="modal-body">
            <label for="" class="control-label col-xs-12"><h4><b>Are you Sure Want to Delete This Record ?</b></h4></label>
            <div class="input-group col-xs-12">
                <center>
                    <button type="button" class="btn btn-success btn-lg" data-dismiss="modal" onclick="DeleteDepartmentYes( '<?php echo $department->id; ?>' )">Yes</button>&nbsp;&nbsp;
                    <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">NO</button>
                </center>
                <br>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div> 
</div>
</div>







