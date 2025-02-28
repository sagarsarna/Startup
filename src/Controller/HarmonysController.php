<?php
namespace App\Controller;
use App\Controller\AppController;
Class HarmonysController extends AppController{
    public function index()
    {
  $harmony = $this->Harmonys->newEmptyEntity();

     if($this->request->is('post')) {
         $harmony = $this->Harmonys->patchEntity($harmony, $this->request->getData());

      if ($this->Harmonys->save($harmony)) {
        $this->Flash->success(_('User sucessfully saved.'));
        return $this->redirect(['action' => 'index']);
      }
        $this->flash->error(_('Unable to save User.'));
     }
       $this->set(compact('harmony'));
    }
    public function about(){
        
    }
    public function service (){
        
    }
    public function blog (){
        
    }
    public function contact (){
        // $harmony = $this->Harmonys->newEmptyEntity();
        // if($this->request->is('post')) {
        //     $harmony = $this->Harmonys->patchEntity($harmony,$this->request->getData());
        //     if ($this->Harmonys->save($Harmony)) {
        //         $this->Flash->success(_('User sucessfully saved.'));
        //         return $this->redirect(['action' => 'contact']);
        //     }
        //     $this->flash->error(_('Unable to save User.'));
        // }
        // $this->set(compact('Harmony'));
    }
    public function detail (){
        
    }
    public function feature (){
        
    }
    public function price (){
        
    }
    public function quote (){
        
    }
    public function team (){
        
    }
    public function testomial (){
        
    }

}