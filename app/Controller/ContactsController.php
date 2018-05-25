<?php

/**
 *
 */
class ContactsController extends AppController {

  public $components = array('Session');

    public function index() {
		$data = $this->Contact->find('all',array(
            'contain' => 'Customer'));
		#pr($data); die();

		$this->set('contacts',$data);
	}

    public function add() {
      if($this->request->is('post')) {
          $this->Contact->create();
          if ($this->Contact->save($this->request->data)) {
              $this->Session->setFlash('New Contact added');
              return $this->redirect(array('action' => 'index'));
          } else {
              $this->Session->setFlash('Sorry, Unable to add new Contact');
          }
      }
      $this->set('contacts', $this->Contact->Customer->find('list'));
      #pr($this->Contact->Customer->find('list'));die();
    }

    public function edit($id) {
        $data = $this->Contact->findById($id);

        if($this->request->is(array('post','put'))) {
            $this->Contact->id = $id;
            if($this->Contact->save($this->request->data)) {
                $this->Session->setFlash('Contact information is updated');
                $this->redirect('index');
            }
        }
        $this->request->data = $data;
    }


}



?>
