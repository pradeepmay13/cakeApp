<?php

namespace App\Controller;

class LoginsController extends AppController
{    
//    public function beforeFilter(Event $event) { 
//        Configure::write('debug', false); 
//    } 
    public function index()
    {
        $this->viewBuilder()->setLayout('logintemplate');
        $this->render('login');
    }
}
