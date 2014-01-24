<?php
class Firstpreference extends AppModel
{
	var $name = "Firstpreference";
	var $belongsTo = array("Delegate");
	
	public $validate = array(
				 'delegate_id' => array('rule' => 'numeric',
							'required' => true,
							'message' => 'country name misspelled'
							),
				 'council' => array('rule' => array('inList', array("UNOOSA","UNGA-DISEC","HRC","HSC","UNEP")),
						    'required' => true,
						    'message' => 'country name misspelled'
						    
						),
				 'country1' => array('rule' => 'alphaNumeric',
						     'required' => true,
						     'message' => 'country name misspelled'
						),
				 'country2' => array('rule' => 'alphaNumeric',
						     'required' => true,
						     'message' => 'country name misspelled'
						),
				 'country3' => array('rule' => 'alphaNumeric',
						     'required' => true,
						     'message' => 'country name misspelled'
						)
				 
				 );
}
?>