<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('users', $this->paginate($this->Users));
        $this->set('_serialize', ['users']);
    }

    public function isAuthorized($user)
    {
        return parent::isAuthorized($user);
    }
    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    public function login()
    {
        $this->loadModel('Memberships');
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            $user_id = $this->request->session()->read('Auth.User.id');
            //  $isEmpty = $user->isEmpty();
            if ($user) {
                $memberships = TableRegistry::get('Memberships');
                $user_details = $memberships->find()
                    ->where(['user_id' => $user['id']])
                    ->orderDesc('id')
                    ->first();

                if ($user_details) {
                    if ($user_details->status_id == 1) {
                        $this->Auth->setUser($user);

                        if ($user['user_type_id'] === 1) {
                            return $this->redirect($this->Auth->redirectUrl(['controller' => 'admin/users', 'action' => 'index']));
                        } else {
                            return $this->redirect($this->Auth->redirectUrl(['controller' => 'users', 'action' => 'home']));

                        }
                    } elseif ($user_details->status_id != 1) {
                        $this->Auth->setUser($user);
                        $this->Flash->error('Your Membership has expired, Please follow the steps to Renew.');
                        return $this->redirect(['controller' => 'users', 'action' => 'renew']);
                    }

                }


            } elseif (!$user) {
                $this->Flash->error('Incorrect Email Address or Password');
            }
        }
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function register()
    {
        $countries = $this->Users->Countries->find('list');

        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }

        $this->set(compact('user','countries'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
