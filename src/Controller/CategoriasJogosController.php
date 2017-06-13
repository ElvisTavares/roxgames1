<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CategoriasJogos Controller
 *
 * @property \App\Model\Table\CategoriasJogosTable $CategoriasJogos
 *
 * @method \App\Model\Entity\CategoriasJogo[] paginate($object = null, array $settings = [])
 */
class CategoriasJogosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $categoriasJogos = $this->paginate($this->CategoriasJogos);

        $this->set(compact('categoriasJogos'));
        $this->set('_serialize', ['categoriasJogos']);
    }

    /**
     * View method
     *
     * @param string|null $id Categorias Jogo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriasJogo = $this->CategoriasJogos->get($id, [
            'contain' => ['Jogos']
        ]);

        $this->set('categoriasJogo', $categoriasJogo);
        $this->set('_serialize', ['categoriasJogo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriasJogo = $this->CategoriasJogos->newEntity();
        if ($this->request->is('post')) {
            $categoriasJogo = $this->CategoriasJogos->patchEntity($categoriasJogo, $this->request->getData());
            if ($this->CategoriasJogos->save($categoriasJogo)) {
                $this->Flash->success(__('The categorias jogo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorias jogo could not be saved. Please, try again.'));
        }
        $this->set(compact('categoriasJogo'));
        $this->set('_serialize', ['categoriasJogo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Categorias Jogo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriasJogo = $this->CategoriasJogos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriasJogo = $this->CategoriasJogos->patchEntity($categoriasJogo, $this->request->getData());
            if ($this->CategoriasJogos->save($categoriasJogo)) {
                $this->Flash->success(__('The categorias jogo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorias jogo could not be saved. Please, try again.'));
        }
        $this->set(compact('categoriasJogo'));
        $this->set('_serialize', ['categoriasJogo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Categorias Jogo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriasJogo = $this->CategoriasJogos->get($id);
        if ($this->CategoriasJogos->delete($categoriasJogo)) {
            $this->Flash->success(__('The categorias jogo has been deleted.'));
        } else {
            $this->Flash->error(__('The categorias jogo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
