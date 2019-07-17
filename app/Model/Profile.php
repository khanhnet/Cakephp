<?php

class Profile extends AppModel {
	var $name = "Profile";
	
  public $belongsTo = array(
   'User' => array(
     'className' => 'User',
     'foreignKey' => 'id_user'
   )
  );
}
?>