<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Responsableserviceprodops Controller
 *
 * @property \App\Model\Table\ResponsableserviceprodopsTable $Responsableserviceprodops
 * @method \App\Model\Entity\Responsableserviceprodop[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ResponsableserviceprodopsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $responsableserviceprodops = $this->paginate($this->Responsableserviceprodops);

        $this->set(compact('responsableserviceprodops'));
    }

    /**
     * View method
     *
     * @param string|null $id Responsableserviceprodop id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $responsableserviceprodop = $this->Responsableserviceprodops->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('responsableserviceprodop'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $responsableserviceprodop = $this->Responsableserviceprodops->newEmptyEntity();
        if ($this->request->is('post')) {
            $responsableserviceprodop = $this->Responsableserviceprodops->patchEntity($responsableserviceprodop, $this->request->getData());
            if ($this->Responsableserviceprodops->save($responsableserviceprodop)) {
                $this->Flash->success(__('The responsableserviceprodop has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The responsableserviceprodop could not be saved. Please, try again.'));
        }
        $this->set(compact('responsableserviceprodop'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Responsableserviceprodop id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $responsableserviceprodop = $this->Responsableserviceprodops->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $responsableserviceprodop = $this->Responsableserviceprodops->patchEntity($responsableserviceprodop, $this->request->getData());
            if ($this->Responsableserviceprodops->save($responsableserviceprodop)) {
                $this->Flash->success(__('The responsableserviceprodop has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The responsableserviceprodop could not be saved. Please, try again.'));
        }
        $this->set(compact('responsableserviceprodop'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Responsableserviceprodop id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $responsableserviceprodop = $this->Responsableserviceprodops->get($id);
        if ($this->Responsableserviceprodops->delete($responsableserviceprodop)) {
            $this->Flash->success(__('The responsableserviceprodop has been deleted.'));
        } else {
            $this->Flash->error(__('The responsableserviceprodop could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
