<?php
/**
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) Mindforce Team (http://mindforce.me)
* @link          http://mindforce.me RearEngine CakePHP 3 Plugin
* @since         0.0.1
* @license       http://www.opensource.org/licenses/mit-license.php MIT License
*/
namespace RearEngine\Controller\Admin;

use RearEngine\Controller\AppController;

/**
 * Blocks Controller
 *
 * @property RearEngine\Model\Table\BlocksTable $Blocks
 */
class BlocksController extends AppController {

	public function initialize()
    {
		parent::initialize();
        $this->loadModel('Platform.Blocks');
    }

/**
 * Index method
 *
 * @return void
 */
	public function index() {
		$this->set('blocks', $this->paginate($this->Blocks));
	}

/**
 * View method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function view($id = null) {
		$block = $this->Blocks->get($id, [
			'contain' => []
		]);
		$this->set('block', $block);
	}

/**
 * Add method
 *
 * @return void
 */
	public function add() {
		$block = $this->Blocks->newEntity($this->request->data);
		if ($this->request->is('post')) {
			if ($this->Blocks->save($block)) {
				$this->Flash->success('The block has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The block could not be saved. Please, try again.');
			}
		}
		$this->set(compact('block'));
	}

/**
 * Edit method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function edit($id = null) {
		$block = $this->Blocks->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$block = $this->Blocks->patchEntity($block, $this->request->data);
			if ($this->Blocks->save($block)) {
				$this->Flash->success('The block has been saved.');
				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error('The block could not be saved. Please, try again.');
			}
		}
		$this->set(compact('block'));
	}

/**
 * Delete method
 *
 * @param string $id
 * @return void
 * @throws \Cake\Network\Exception\NotFoundException
 */
	public function delete($id = null) {
		$block = $this->Blocks->get($id);
		$this->request->allowMethod('post', 'delete');
		if ($this->Blocks->delete($block)) {
			$this->Flash->success('The block has been deleted.');
		} else {
			$this->Flash->error('The block could not be deleted. Please, try again.');
		}
		return $this->redirect(['action' => 'index']);
	}
}
