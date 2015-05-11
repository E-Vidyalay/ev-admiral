<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array(
        'Session',
        'Auth' => array(
            'authenticate' => array(
                'User' => array(
                    'userModel' => 'User',
                    'fields' => array(
                        'username' => 'username',
                        'password' => 'password'
                    )
                ),
                'Student'=>array(
					'userModel'=>'Student',
					'fields'=>array(
						'username'=>'username',
						'password'=>'password'
					)
				)
            )
        )
    );

    public function beforeFilter(){
      

        //Logged In user variables
        $this->set('isLoggedIn',$this->Auth->loggedIn());
        $this->set('activeUser',$this->Session->read('Auth'));
        $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'index');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'index');
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        // Basic setup
        $this->Auth->authenticate = array('Form');
        // Pass settings in
        $this->Auth->authenticate = array(
            'Form' => array('userModel' => 'User')
        );
        $this->Auth->allow('login','forgot_password','update_password');
        $this->activeUser = $this->Session->read('Auth');
        $this->isLoggedIn = $this->Auth->loggedIn();
    }
	public function isAuthorized($user) {
		// Here is where we should verify the role and give access based on role
		
		return true;
	}
}
