<?php
class Thirdpreference extends AppModel
{
	var $name = "Thirdpreference";
	var $belongsTo = array("Delegate");
	public $validate = array(
				 
				 'council' => array('rule' => array('inList', array("UNOOSA","UNGA-DISEC","HRC","HSC","UNEP")),
						    'required' => true,
							'allowEmpty' => false,
						    'message' => 'Check council name.'
						    
						),
				 'country1' => array('rule' => '/^[a-zA-Z\s\.\-]{1,40}$/i',
						     'required' => true,
							 'allowEmpty' => false,
						     'message' => 'Check the country name.'
						),
				 'country2' => array('rule' => '/^[a-zA-Z\s\.\-]{1,40}$/i',
						     'required' => true,
							 'allowEmpty' => false,
						     'message' => 'Check the country name.'
						),
				 'country3' => array('rule' => '/^[a-zA-Z\s\.\-]{1,40}$/i',
						     'required' => true,
							 'allowEmpty' => false,
						     'message' => 'Check the country name.'
						)
				 
				 );
				 
}
?>