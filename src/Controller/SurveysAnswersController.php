<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SurveysAnswers Controller
 *
 *
 * @method \App\Model\Entity\SurveysAnswer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SurveysAnswersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $surveysAnswers = $this->paginate($this->SurveysAnswers);

        $this->set(compact('surveysAnswers'));
    }

    /**
     * View method
     *
     * @param string|null $id Surveys Answer id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $surveysAnswer = $this->SurveysAnswers->get($id, [
            'contain' => [],
        ]);

        $this->set('surveysAnswer', $surveysAnswer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $surveysAnswer = $this->SurveysAnswers->newEntity();
        if ($this->request->is('post')) {
            $surveysAnswer = $this->SurveysAnswers->patchEntity($surveysAnswer, $this->request->getData());
            if ($this->SurveysAnswers->save($surveysAnswer)) {
                $this->Flash->success(__('The surveys answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The surveys answer could not be saved. Please, try again.'));
        }
        $this->set(compact('surveysAnswer'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Surveys Answer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $surveysAnswer = $this->SurveysAnswers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $surveysAnswer = $this->SurveysAnswers->patchEntity($surveysAnswer, $this->request->getData());
            if ($this->SurveysAnswers->save($surveysAnswer)) {
                $this->Flash->success(__('The surveys answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The surveys answer could not be saved. Please, try again.'));
        }
        $this->set(compact('surveysAnswer'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Surveys Answer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $surveysAnswer = $this->SurveysAnswers->get($id);
        if ($this->SurveysAnswers->delete($surveysAnswer)) {
            $this->Flash->success(__('The surveys answer has been deleted.'));
        } else {
            $this->Flash->error(__('The surveys answer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
