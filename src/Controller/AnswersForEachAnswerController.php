<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AnswersForEachAnswer Controller
 *
 *
 * @method \App\Model\Entity\AnswersForEachAnswer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AnswersForEachAnswerController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $answersForEachAnswer = $this->paginate($this->AnswersForEachAnswer);

        $this->set(compact('answersForEachAnswer'));
    }

    /**
     * View method
     *
     * @param string|null $id Answers For Each Answer id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $answersForEachAnswer = $this->AnswersForEachAnswer->get($id, [
            'contain' => [],
        ]);

        $this->set('answersForEachAnswer', $answersForEachAnswer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $answersForEachAnswer = $this->AnswersForEachAnswer->newEntity();
        if ($this->request->is('post')) {
            $answersForEachAnswer = $this->AnswersForEachAnswer->patchEntity($answersForEachAnswer, $this->request->getData());
            if ($this->AnswersForEachAnswer->save($answersForEachAnswer)) {
                $this->Flash->success(__('The answers for each answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The answers for each answer could not be saved. Please, try again.'));
        }
        $this->set(compact('answersForEachAnswer'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Answers For Each Answer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $answersForEachAnswer = $this->AnswersForEachAnswer->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $answersForEachAnswer = $this->AnswersForEachAnswer->patchEntity($answersForEachAnswer, $this->request->getData());
            if ($this->AnswersForEachAnswer->save($answersForEachAnswer)) {
                $this->Flash->success(__('The answers for each answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The answers for each answer could not be saved. Please, try again.'));
        }
        $this->set(compact('answersForEachAnswer'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Answers For Each Answer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $answersForEachAnswer = $this->AnswersForEachAnswer->get($id);
        if ($this->AnswersForEachAnswer->delete($answersForEachAnswer)) {
            $this->Flash->success(__('The answers for each answer has been deleted.'));
        } else {
            $this->Flash->error(__('The answers for each answer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
