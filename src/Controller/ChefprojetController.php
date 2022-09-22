<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Chefprojet Controller
 *
 * @property \App\Model\Table\ChefprojetTable $Chefprojet
 * @method \App\Model\Entity\Chefprojet[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChefprojetController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $chefprojet = $this->paginate($this->Chefprojet);

        $this->set(compact('chefprojet'));
    }

    /**
     * View method
     *
     * @param string|null $id Chefprojet id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chefprojet = $this->Chefprojet->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('chefprojet'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chefprojet = $this->Chefprojet->newEmptyEntity();
        if ($this->request->is('post')) {
            $chefprojet = $this->Chefprojet->patchEntity($chefprojet, $this->request->getData());
            if ($this->Chefprojet->save($chefprojet)) {
                $this->Flash->success(__('The chefprojet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chefprojet could not be saved. Please, try again.'));
        }
        $this->set(compact('chefprojet'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Chefprojet id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chefprojet = $this->Chefprojet->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chefprojet = $this->Chefprojet->patchEntity($chefprojet, $this->request->getData());
            if ($this->Chefprojet->save($chefprojet)) {
                $this->Flash->success(__('The chefprojet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chefprojet could not be saved. Please, try again.'));
        }
        $this->set(compact('chefprojet'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Chefprojet id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chefprojet = $this->Chefprojet->get($id);
        if ($this->Chefprojet->delete($chefprojet)) {
            $this->Flash->success(__('The chefprojet has been deleted.'));
        } else {
            $this->Flash->error(__('The chefprojet could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
