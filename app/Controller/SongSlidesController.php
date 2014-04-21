<?php
App::uses('AppController', 'Controller');
/**
 * SongSlides Controller
 *
 * @property SongSlide $SongSlide
 * @property PaginatorComponent $Paginator
 */
class SongSlidesController extends AppController {
	public $helpers = array('Js' => array('Jquery'));
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
		$this->SongSlide->recursive = 0;
		$this->set('songSlides', $this->Paginator->paginate());
	}

	public function loaddata() {
		$this->layout = 'ajax';
		$ssid = array_key_exists('ssid', $_GET) ? $this->request->query['ssid'] : null;
		$userId = array_key_exists('userId', $_GET) ? $this->request->query['userId'] : null;

		// need ssid, title
		if($userId) {
			$songSlides =  $this->SongSlide->getSongSlidesTitlesByUserId($userId);
			die(var_dump($songSlides));
			$songListData = array('ssid'=>$songSlides['_id'], 'title'=>$songSlides['title']);
		} else {
			$songListData = null;
		}

		if($ssid) {
		  $songSlide = $this->SongSlide->getSongSlideById($ssid);
		} else {
		  $songSlide = null;
		}

		$this->set('songSlide', $songSlide);  //find('first', $options));
		$this->set('songListData' , $songListData);
		
	}
	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SongSlide->exists($id)) {
			throw new NotFoundException(__('Invalid song slide'));
		}
		$options = array('conditions' => array('SongSlide.' . $this->SongSlide->primaryKey => $id));
		$this->set('songSlide', $this->SongSlide->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SongSlide->create();
			if ($this->SongSlide->save($this->request->data)) {
				$this->Session->setFlash(__('The song slide has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The song slide could not be saved. Please, try again.'));
			}
		}
		$users = $this->SongSlide->User->find('list');
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
		
		if (!$this->SongSlide->exists($id)) {
			throw new NotFoundException(__('Invalid song slide'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SongSlide->save($this->request->data)) {
				$this->Session->setFlash(__('The song slide has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The song slide could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SongSlide.' . $this->SongSlide->primaryKey => $id));
			$this->request->data = $this->SongSlide->find('first', $options);
		}
		$users = $this->SongSlide->User->find('list');
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
		$this->SongSlide->id = $id;
		if (!$this->SongSlide->exists()) {
			throw new NotFoundException(__('Invalid song slide'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SongSlide->delete()) {
			$this->Session->setFlash(__('The song slide has been deleted.'));
		} else {
			$this->Session->setFlash(__('The song slide could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
