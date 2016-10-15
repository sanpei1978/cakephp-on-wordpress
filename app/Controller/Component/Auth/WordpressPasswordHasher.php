<?php

// including a class on WordPress.
require ROOT . '/../wp-includes/class-phpass.php'; // In this case, CakePHP on WordPress.

App::uses( 'AbstractPasswordHasher', 'Controller/Component/Auth' );

// Imitating the WordPress class.
class WordpressPasswordHasher extends AbstractPasswordHasher {

	private $hasher;

	function __construct() {
		parent::__construct();
		$this->hasher = new PasswordHash( 8, true );
	}

	public function hash( $password ) {
		return $this->hasher->HashPassword( $password );
	}

	public function check( $password, $hashedPassword ) {
		return $this->hasher->CheckPassword( $password, $hashedPassword );
	}
}
