<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

	public $components = array(
		'Auth' => array(
				// Your setting.
			)
		),
	);

	public function beforeFilter() {

		if (isset($this->request->params['xxxxx'])) {
			$this->Auth->authenticate = array(
				'Form' => array(
					'userModel' => 'User',
					// Using column user_login and user_pass in wp_users.
					'fields' => array( 'username' => 'user_login', 'password'=>'user_pass' ),
					// PasswordHasher to use wp_users.
					'passwordHasher' => 'Wordpress',
				)
			);
			// othter setting.
		} else {
			;
		}
	}

}
