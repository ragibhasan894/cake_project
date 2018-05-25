<?php

/**
 *
 */
class CustomersController extends AppController
{
  public $helpers = array('Html','Form');
  public $components = array('Session');

  public function index() {
    //$data = $this->Customer->find('all');
    //pr($data);
    //die();
    //$this->set('customers',$data);


    $data = $this->Customer->find('all',array('contain' => 'Contact'));
    #pr($data); die();

    $this->set('customers',$data);
  }

  public function add() {
    if($this->request->is('post')) {
      $this->Customer->create();
      if($this->Customer->save($this->request->data)) {
        $this->Session->setFlash('New Customer added');
        return $this->redirect(array('action'=>'index'));
      }
      else {
        $this->Session->setFlash('Sorry, Unable to add new customer');
      }
    }
  }

  public function view($id) {
      $data = $this->Customer->findById($id);
	    $this->set('customers',$data);
  }

  public function edit($id) {
      $data = $this->Customer->findById($id);

		if($this->request->is(array('post','put'))) {
			$this->Customer->id = $id;
			if($this->Customer->save($this->request->data)) {
				$this->Session->setFlash('Customer information is updated');
				$this->redirect('index');
			}
		}
		$this->request->data = $data;
  }

    public function delete($id) {

			$this->Customer->id = $id;

			if($this->request->is(array('post','put'))) {
				if($this->Customer->delete()) {
					$this->Session->setFlash('Customer deleted!');
					$this->redirect('index');
				}
			}
			$this->request->data = $data;
		}

}
?>
