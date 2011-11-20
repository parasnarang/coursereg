<?php
App::uses('AppController', 'Controller');
/**
 * Classrooms Controller
 *
 * @property Classroom $Classroom
 */
class ClassroomsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Classroom->recursive = 0;
		$this->set('classrooms', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Classroom->id = $id;
		if (!$this->Classroom->exists()) {
			throw new NotFoundException(__('Invalid classroom'));
		}
		$this->set('classroom', $this->Classroom->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Classroom->create();
			if ($this->Classroom->save($this->request->data)) {
				$this->Session->setFlash(__('The classroom has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The classroom could not be saved. Please, try again.'));
			}
		}
		$courses = $this->Classroom->Course->find('list');
		$this->set(compact('courses'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Classroom->id = $id;
		if (!$this->Classroom->exists()) {
			throw new NotFoundException(__('Invalid classroom'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Classroom->save($this->request->data)) {
				$this->Session->setFlash(__('The classroom has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The classroom could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Classroom->read(null, $id);
		}
		$courses = $this->Classroom->Course->find('list');
		$this->set(compact('courses'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Classroom->id = $id;
		if (!$this->Classroom->exists()) {
			throw new NotFoundException(__('Invalid classroom'));
		}
		if ($this->Classroom->delete()) {
			$this->Session->setFlash(__('Classroom deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Classroom was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
