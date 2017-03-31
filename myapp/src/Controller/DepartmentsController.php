<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Departments Controller
 *
 * @property \App\Model\Table\DepartmentsTable $Departments
 */
class DepartmentsController extends AppController
{

    public $paginate=array(
        'limit'=>5,
        'order'=>array(
            'id'=>'desc'
        )
    );

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $departments=$this->paginate($this->Departments);
        $this->set(compact('departments'));
        $this->set('_serialize', ['departments']);
    }

    /**
     * View method
     *
     * @param string|null $id Department id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id=null)
    {
        $department=$this->Departments->get($id, [
            'contain'=>[]
        ]);

        $this->set('department', $department);
        $this->set('_serialize', ['department']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $department=$this->Departments->newEntity();

        if($this->request->is('post')){
            $department=$this->Departments->patchEntities($department, $this->request->data['name']);

            if($this->Departments->saveMany($department)){
                $this->Flash->success(__('The department has been saved.'));
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error(__('The department could not be saved. Please, try again.'));
        }
        $this->set(compact('department'));
        $this->set('_serialize', ['department']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Department id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id=null)
    {
        $department=$this->Departments->get($id, [
            'contain'=>[]
        ]);
        if($this->request->is(['patch', 'post', 'put'])){
            $department=$this->Departments->patchEntity($department, $this->request->getData());
            if($this->Departments->save($department)){
                $this->Flash->success(__('The department has been saved.'));

                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error(__('The department could not be saved. Please, try again.'));
        }
        $this->set(compact('department'));
        $this->set('_serialize', ['department']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Department id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id=null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $department=$this->Departments->get($id);
        if($this->Departments->delete($department)){
            $this->Flash->success(__('The department has been deleted.'));
        }else{
            $this->Flash->error(__('The department could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action'=>'index']);
    }

}
