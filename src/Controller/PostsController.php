<?php

namespace App\Controller;

class PostsController extends AppController
{
    public function initialize(){
        parent::initialize();
        $this->loadComponent('Flash');
    }
    public function index(){ 
        $this->viewBuilder()->setLayout('pages_template');
        //$session = $this->request->session();
        //$session->write('Auth.User.Designation', "Developer");
        //$session->destroy();
        $posts=$this->Posts->find('all');
        $this->set(compact('posts'));
    }
    public function dashboard(){ 
        $this->viewBuilder()->setLayout('dashboard_template');
    }
    public function add(){
        $this->viewBuilder()->setLayout('pages_template');
        $post=$this->Posts->newEntity();
        if($this->request->is('post')){
            $post=$this->Posts->patchEntity($post,$this->request->data);
            $post->created=date("Y-m-d H:i:s");
            $post->modified=date("Y-m-d H:i:s");
            if($this->Posts->save($post)){
                $this->Flash->success('Your Post has been saved');
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error('Unable to save data');
        }
        
        $this->set('post',$post);
    }
    public function delete($id)
    {
        //$this->request->allowMethod(['post', 'delete']);
        $post = $this->Posts->get($id);
        if ($this->Posts->delete($post)) {
            $this->Flash->success(__('The post with id: {0} has been deleted.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
    public function edit($id = null){
        $this->viewBuilder()->setLayout('pages_template');
        $post = $this->Posts->get($id);
        if ($this->request->is(['post','put'])) {
            $post = $this->Posts->patchEntity($post, $this->request->data);
            $post->modified = date("Y-m-d H:i:s");
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('Your post has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your post.'));
        }
        $this->set('post', $post);
    }
}
