<?php

App::uses( 'AppModel', 'Model' );

class User extends AppModel {

	var $useDbConfig = 'wordpress'; // Switching to use a WordPress database.

	public $displayField = 'display_name';

}
