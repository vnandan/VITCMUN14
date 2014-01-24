<?php
class Delegate extends AppModel
{
	var $name = "Delegate";
	var $hasOne = array("Firstpreference","Secondpreference","Thirdpreference","Allotment");
	
	public $validate = array(
		
				'name' => array(
						'rule' => array('alphanumeric','maxLength'=>60),
						'allowEmpty' => false,
						'required'=>true,
						'message' => 'Check the name.'
						),
				
				'institution' => array(
						'rule' => array('alphanumeric','maxLength'=>100),
						'allowEmpty' => false,
						'required'=>true,
						'message' => 'Check your institution name.'
						),
				'contact' =>array(
					'number'=> array(
						'rule' => array('naturalNumber'),
						'allowEmpty' => false,
						'required'=>true,
						'message' => 'Enter a valid contact number'
						),
					'contactlength'=> array(
								'rule'	=> array('between',10,11),
								'message' => 'Contact number must be less than 12 digits'
								)
						),
				'email' => array(
				'isemail'=>array(
					      'rule' => 'email',
						'allowEmpty' => false,
						'required'=>true,
						'message' => 'Check the email id.'
						),
				'isunique' => array(
						'rule' => 'isUnique',
						'message'=>'The email id is already used.'
						)
					
						),
				'munasdelegate' => array(
						'number'=>array(
							'rule'=>'numeric',
							'allowEmpty' => false,
							'required'=>true,
							'message'=>'Must be a number'
								),
						'asdelegatepositive'=> array(
									'rule'=>array('comparison','>=',0),
									'message'=>'Must be 0 or more'
									)
						),
				'munaseb' => array(
						'number'=>array(
							'rule'=>'numeric',
							'allowEmpty' => false,
							'required'=>true,
							'message'=>'Must be a number'
								),
						'asdelegatepositive'=> array(
									'rule'=>array('comparison','>=',0),
									'message'=>'Must be 0 or more'
									)
						),
				'previousxp'=> array(
						'rule'=>'/^[a-zA-Z0-9\,\.\;\-\s]{0,}$/i',
						'required'=> true,
						'allowEmpty'=>false,
						'message' => 'only . , - allowed for special characters.'
						),
				
				'accomodation'=> array(
						'rule'=>array('inList',array(0,1)),
						'message' => 'Only selection is allowed.'
						)
				
					 
				 );
}
?>