<?php

require_once 'AppController.php';

class DefaultController extends AppController
{

    public function index()
    {
        $this->render('login');
    }

    public function register(){
        $this->render('register');
    }
    public function memes(){
        $this->render('memes');
    }
    public function users(){
        $this->render('users');
    }
}