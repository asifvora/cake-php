<?php

/**
 * @var \App\View\AppView $this
 */
use Cake\Routing\Router
?>
<section id="medical_technology_schools">
    <section id="mainpage">
        <nav class="large-3 medium-4 columns" id="actions-sidebar">
            <ul class="side-nav">
                <li class="heading"><?= __('Actions')?></li>
                <li><?= $this->Html->link(__('New Department'), ['action'=>'add'])?></li>
                <li><?= $this->Html->link(__('List Employees'), ['controller'=>'Employees', 'action'=>'index'])?></li>
                <li><?= $this->Html->link(__('New Employee'), ['controller'=>'Employees', 'action'=>'add'])?></li>
            </ul>
        </nav>
        <div class="departments index large-9 medium-8 columns content">
            <h3><?= __('Departments')?></h3>
            <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id')?></th>
                        <th scope="col"><?= $this->Paginator->sort('name')?></th>
                        <th scope="col"><?= $this->Paginator->sort('created')?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified')?></th>
                        <th scope="col" class="actions"><?= __('Actions')?></th>
                    </tr>
                </thead>
                <tbody>
                <div id="message"></div>
                <?php foreach($departments as $department):?>
                    <tr id='row<?= h($department->id)?>'>
                        <td><?= $this->Number->format($department->id)?></td>
                        <td><?= h($department->name)?></td>
                        <td><?= h($department->created)?></td>
                        <td><?= h($department->modified)?></td>
                        <td class="actions">
                            <button type="button" id="btn" class="btn btn-info btn-xs" data-toggle="modal" onclick="ViewDepartment ( '<?= h($department->id)?>' )" data-target="#myModal">View</button>
                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" onclick="EditDepartment ( '<?= h($department->id)?>' )" data-target="#myModal">Edit</button>
                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" onclick="DeleteDepartment ( '<?= h($department->id)?>' )" data-target="#myModal">Delete</button>
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
    </section>
</section>

<?php //echo Router::url(array('controller'=>'Departments', 'action'=>'editAjax'));?>
<script>

    /**
     * View Department using ajax
     * @param {type} did
     * @returns {undefined}*
     */
    function ViewDepartment ( did )
    {
        $ ( '#myModal' ).html ( '<div class="modal-dialog"><br><br><br><br><br><br><br><br><center><img src="/img/loader/spinner.gif" alt="loader"><center></div>' ) ; //Loading loader
        $ ( '#myModal' ).load ( 'departments/view/' + did ) ;

//        $.ajax ( {
//            url : "/departments/view_ajax" ,
//            data : { id : did } ,
//            type : 'POST' ,
//            //dataType : 'JSON' ,
//            success : function ( data )
//            {
//                console.log ( data ) ;
//                $ ( '#myModal' ).html ( data ) ;
//            } ,
//            error : function ( data )
//            {
//                console.log ( data ) ;
//                console.log ( 'Sorry Erorr in Ajax Call' ) ;
//            }
//
//        } ) ;
    }



    /**
     * Edit Department using ajax
     * @param {type} did
     * @returns {undefined}*
     */
    function EditDepartment ( did )
    {
        $ ( '#myModal' ).html ( '<div class="modal-dialog"><br><br><br><br><br><br><br><br><center><img src="/img/loader/spinner.gif" alt="loader"><center></div>' ) ; //Loading loader
        $ ( '#myModal' ).load ( 'departments/edit/' + did ) ;
//
//        $.ajax ( {
//            url : "/departments/edit_ajax" ,
//            data : { id : did } ,
//            type : 'POST' ,
//            //dataType : 'JSON' ,
//            success : function ( data )
//            {
//                console.log ( data ) ;
//                $ ( '#myModal' ).html ( data ) ;
//            } ,
//            error : function ( data )
//            {
//                console.log ( data ) ;
//                console.log ( 'Sorry Erorr in Ajax Call' ) ;
//            }
//
//        } ) ;
    }



    /**
     * Delete Department using ajax
     * @param {type} did
     * @returns {undefined}*
     */
    function DeleteDepartment ( did )
    {

        $ ( '#myModal' ).html ( '<div class="modal-dialog"><br><br><br><br><br><br><br><br><center><img src="/img/loader/spinner.gif" alt="loader"><center></div>' ) ; //Loading loader

        $.ajax ( {
            url : "/departments/delete_ajax" ,
            data : { id : did } ,
            type : 'POST' ,
            //dataType : 'JSON' ,
            success : function ( data )
            {
                console.log ( data ) ;
                $ ( '#myModal' ).html ( data ) ;
            } ,
            error : function ( data )
            {
                console.log ( data ) ;
                console.log ( 'Sorry Erorr in Ajax Call' ) ;
            }

        } ) ;
    }

    function DeleteDepartmentYes ( did )
    {

        $ ( '#myModal' ).html ( '<div class="modal-dialog"><br><br><br><br><br><br><br><br><center><img src="/img/loader/spinner.gif" alt="loader"><center></div>' ) ; //Loading loader

        $.ajax ( {
            url : "/departments/delete" ,
            data : { id : did } ,
            type : 'POST' ,
            //dataType : 'JSON' ,
            success : function ( data )
            {
                console.log ( data ) ;
                $ ( '#message' ).html ( '<div class="alert alert-success"><strong>Success!</strong> Record Succesfully Deleted...</div>' ) ;
                $ ( '#myModal' ).hide () ;
                $ ( '#row' + did ).hide () ;
                setTimeout ( function () {
                    $ ( '#message' ).html ( '' ) ;
                } , 3000 ) ;
            } ,
            error : function ( data )
            {
                console.log ( data ) ;
                console.log ( 'Sorry Erorr in Ajax Call' ) ;
            }

        } ) ;
    }




</script>


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
</div>
