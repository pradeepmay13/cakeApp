<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth',[
            'loginRedirect'=>[
                'controller'=>'Posts',
                'action'=>'index'
            ],
            'logoutRedirect'=>[
                'controller'=>'Logins',
                'action'=>'display','home'
            ],
            'loginAction' => [
                'controller' => 'users',
                'action' => 'login',
            ],
            'authError' => 'Did you really think you are allowed to see that?',
            'storage' => 'Session'
        ]);
        
        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }
    public $components=array(
        'Flash',
        'Auth'=>array(
            'loginRedirect'=>array(
                'controller'=>'Posts',
                'action'=>'index'
            ),
            'logoutRedirect'=>array(
                'controller'=>'Logins',
                'action'=>'display','home'
            ),
            'authenticate'=>array(
                'Form'=>array(
                    'passwordHasher' => 'Blowfish'
                )
            )
        )
    );
//    public function beforeFilter(Event $event)
//    {
//        $this->Auth->allow(['index', 'view', 'display']);
//    }
}
