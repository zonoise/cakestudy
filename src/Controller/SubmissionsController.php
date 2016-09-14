<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Submissions Controller
 *
 * @property \App\Model\Table\SubmissionsTable $Submissions
 * @property \App\Model\Table\TagsTable $Tags
 */
class SubmissionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $name = $this->request->query('user_name');
        $q = $this->Submissions->find()->where(['user_name'=>$name ])->order(['created'=>'desc']);
        $submissions = $this->paginate($q);


        //$submissions = $this->paginate($this->Submissions);

        $this->set(compact('submissions'));
        $this->set('_serialize', ['submissions']);
    }

    /**
     * View method
     *
     * @param string|null $id Submission id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $submission = $this->Submissions->get($id, [
            'contain' => []
        ]);

        $this->set('submission', $submission);
        $this->set('_serialize', ['submission']);
    }

}
