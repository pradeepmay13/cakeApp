<?php

namespace App\Controller;
use App\Controller\AppController;
use Cake\Validation\Validation;
class UsersController extends AppController
{
    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['add', 'logout']);
    }
    public function login() {
        $this->viewBuilder()->setLayout('logintemplate');
        
        if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }
    public function add() {
        $this->viewBuilder()->setLayout('logintemplate');
        $user=$this->Users->newEntity();
        if($this->request->is('post')){
            $user=$this->Users->patchEntity($user,$this->request->data);
            if($this->Users->save($user)){
                $this->Flash->success(__('User has been saved'));
                return $this->redirect(['action'=>'add']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize',['user']);
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
}
