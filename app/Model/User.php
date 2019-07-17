<?php
class User extends AppModel {
    var $name = "User";//tên của model

    public $hasMany  = array(
   		'Profile' => array(
   			'className' => 'Profile',
   			'foreignKey' => 'id_user',
   			'dependent' => true
   		)
   	);
}
?>