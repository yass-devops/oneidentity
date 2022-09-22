<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Rc Controller
 *
 * @property \App\Model\Table\RcTable $Rc
 * @method \App\Model\Entity\Rc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RcController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $rc = $this->paginate($this->Rc);

        $this->set(compact('rc'));
    }

    /**
     * View method
     *
     * @param string|null $id Rc id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rc = $this->Rc->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('rc'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rc = $this->Rc->newEmptyEntity();
        if ($this->request->is('post')) {
            $rc = $this->Rc->patchEntity($rc, $this->request->getData());
            if ($this->Rc->save($rc)) {
                $this->Flash->success(__('The rc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rc could not be saved. Please, try again.'));
        }
        $this->set(compact('rc'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rc id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rc = $this->Rc->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rc = $this->Rc->patchEntity($rc, $this->request->getData());
            if ($this->Rc->save($rc)) {
                $this->Flash->success(__('The rc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rc could not be saved. Please, try again.'));
        }
        $this->set(compact('rc'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rc id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rc = $this->Rc->get($id);
        if ($this->Rc->delete($rc)) {
            $this->Flash->success(__('The rc has been deleted.'));
        } else {
            $this->Flash->error(__('The rc could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
