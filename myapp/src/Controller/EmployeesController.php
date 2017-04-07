<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Employees Controller
 *
 * @property \App\Model\Table\EmployeesTable $Employees
 */
class EmployeesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
    }

    public $paginate=array(
        'limit'=>4,
        'order'=>array(
            'id'=>'desc'
        ),
        'contain'=>array('Departments', 'Designations')
    );

    public function home()
    {
        //    pr($this->request);
        $this->viewBuilder()->layout('angularjs_default');
        //$this->autoRender=false;
    }

    public function asif()
    {
        
    }

    public function rahul()
    {
        
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        try{

            $this->set('employees', $this->paginate($this->Employees));
            $this->set('_serialize', ['employees']);
        }catch(Exception $e){
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }

//         $curl=curl_init();
//        curl_setopt($curl, CURLOPT_URL, "http://www.google.co.in");
//        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//        $result=curl_exec($curl);
//        curl_close($curl);
//        pr($result);die;
    }

    /**
     * View method
     *
     * @param string|null $id employees id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id=null)
    {
        $employee=$this->Employees->get($id, [
            'contain'=>['Departments', 'Designations']
        ]);

        $this->set('employee', $employee);
        $this->set('_serialize', ['employee']);
    }

    /**
     * Add record in employee table
     * @return type
     */
    public function add()
    {

        //  $sum =$this->Math->doComplexOperation(2,3);
        $employee=$this->Employees->newEntity();

        if($this->request->is('post')){

            $getImageName=$this->request->data['image']['name'];
            $file=$this->request->data['image'];
            $path='img/upload/';
            $image=$this->ImageUpload->UploadImage($getImageName, $file, $path);

            $this->request->data['image']=$image;
            $this->request->data['hobby']=implode(',', $this->request->data['hobby']);
            $employee=$this->Employees->patchEntity($employee, $this->request->getData());

            if($this->Employees->save($employee)){
                $this->Flash->success(__('The Employee has been saved.'));
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error(__('The Employee could not be saved. Please, try again.'));
        }


        $departments=$this->Employees->Departments->find('list', ['limit'=>50]);
        $designations=$this->Employees->Designations->find('list', ['limit'=>50]);
        $options=array('Criket'=>'Criket', 'Travelling'=>'Travelling', 'Drawing'=>'Drawing', 'Singing'=>'Singing');

        $this->set(compact('employee', 'departments', 'designations', 'options'));
        $this->set('_serialize', ['employee']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Employees id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id=null)
    {
        $employee=$this->Employees->get($id, [
            'contain'=>[]
        ]);

        if($this->request->is(['patch', 'post', 'put'])){

            $getImageName=$this->request->data['image']['name'];
            $file=$this->request->data['image'];
            $path='img/upload/';
            $oldImage=$employee['image'];

            $image=$this->ImageUpload->UpdateImage($getImageName, $file, $path, $oldImage);

            $this->request->data['image']=$image;
            $this->request->data['hobby']=implode(',', $this->request->data['hobby']);
            $employee=$this->Employees->patchEntity($employee, $this->request->getData());


            if($this->Employees->save($employee)){
                $this->Flash->success(__('The Employee has been Updated.'));

                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error(__('The Employee could not be Updated. Please, try again.'));
        }
        $departments=$this->Employees->Departments->find('list', ['limit'=>200]);
        $designations=$this->Employees->Designations->find('list', ['limit'=>200]);
        $options=array('Criket'=>'Criket', 'Travelling'=>'Travelling', 'Drawing'=>'Drawing', 'Singing'=>'Singing');
        $select=explode(",", $employee->hobby);
        $this->set(compact('employee', 'departments', 'designations', 'select', 'options'));
        $this->set('_serialize', ['employee']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Employees id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id=null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employee=$this->Employees->get($id);

        $getImageName=$employee['image'];
        $path='img/upload/';
        $this->ImageUpload->UnlinkImage($getImageName, $path);

        if($this->Employees->delete($employee)){

            $this->Flash->success(__('The Employee has been deleted.'));
        }else{
            $this->Flash->error(__('The Employee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action'=>'index']);
    }

}
