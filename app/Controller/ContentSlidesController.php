<?php
App::uses('AppController', 'Controller');
/**
 * ContentSlides Controller
 *
 * @property ContentSlide $ContentSlide
 * @property PaginatorComponent $Paginator
 */
class ContentSlidesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ContentSlide->recursive = 0;
		$this->set('contentSlides', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ContentSlide->exists($id)) {
			throw new NotFoundException(__('Invalid content slide'));
		}
		$options = array('conditions' => array('ContentSlide.' . $this->ContentSlide->primaryKey => $id));
		$this->set('contentSlide', $this->ContentSlide->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ContentSlide->create();
			if ($this->ContentSlide->save($this->request->data)) {
				$this->Session->setFlash(__('The content slide has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The content slide could not be saved. Please, try again.'));
			}
		}
		$users = $this->ContentSlide->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ContentSlide->exists($id)) {
			throw new NotFoundException(__('Invalid content slide'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ContentSlide->save($this->request->data)) {
				$this->Session->setFlash(__('The content slide has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The content slide could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContentSlide.' . $this->ContentSlide->primaryKey => $id));
			$this->request->data = $this->ContentSlide->find('first', $options);
		}
		$users = $this->ContentSlide->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ContentSlide->id = $id;
		if (!$this->ContentSlide->exists()) {
			throw new NotFoundException(__('Invalid content slide'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ContentSlide->delete()) {
			$this->Session->setFlash(__('The content slide has been deleted.'));
		} else {
			$this->Session->setFlash(__('The content slide could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
