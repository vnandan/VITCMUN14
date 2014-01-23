<?php
class AdminController extends AppController
{
	function index()
	{
		
	}
	
	
	
	
	function view($council,$preference)
	{
		switch($preference)
		{
			case 1:
				$this->set('unalloted',serialize($this->Admin->Delegate->find('all', array('conditions' => array('alloted' => 0,'Firstpreference.council' => $council)))));
				$this->set('alloted',serialize($this->Admin->Delegate->find('all', array('conditions' => array('alloted' => 1,'Firstpreference.council' => $council)))));
				break;
			case 2:
				$this->set('unalloted',serialize($this->Admin->Delegate->find('all', array('conditions' => array('alloted' => 0,'Secondpreference.council' => $council)))));
				$this->set('alloted',serialize($this->Admin->Delegate->find('all', array('conditions' => array('alloted' => 1,'Secondpreference.council' => $council)))));
				break;
			case 3:
				$this->set('unalloted',serialize($this->Admin->Delegate->find('all', array('conditions' => array('alloted' => 0,'Thirdpreference.council' => $council)))));
				$this->set('alloted',serialize($this->Admin->Delegate->find('all', array('conditions' => array('alloted' => 1,'Thirdpreference.council' => $council)))));
				break;
			
			default:
				$this->set("error","Invalid input");
				break;
		}
	}
	
	public function allot()
	{
		$country = array();
		$countrynames = ["india","japan","pakistan","indonesia"];
		foreach($countrynames as $name)
		{
			$country["$name"] = $name;
		}
		$result = $this->Admin->Delegate->Allotment->query("SELECT DISTINCT country from ALLOTMENTS");
		$existing = array();
		foreach($result as $c)
		{
			array_push($existing,$c['ALLOTMENTS']['country']);
		}
		$uniqueCountry = array_diff($country,$existing);
		$this->set("country",$uniqueCountry);
		
		$this->Session->userId = 1;
		if($this->request->is('post'))
		{
		
		$this->request->data['Allotment']['delegate_id']=1;
		$this->Admin->Delegate->Allotment->create();
		if ($this->Admin->Delegate->Allotment->save($this->request->data))
		{
		$this->Admin->Delegate->read(null, 1);
		$this->Admin->Delegate->set(array('alloted' => 1));
		$this->Admin->Delegate->save();
		$this->Session->setFlash("Allotment made.");
		return $this->redirect(array(’/delegates’));
		}
		$this->Session->setFlash("Unable to allot.");
		
		}
		else
		{
		
		}
		
	}
	
	function unallot($delegate_id=null)
	{
		if(!$delegate_id)
		{
			$this->Session->setFlash("Invalid Id");
		}
		else
		{
			if($this->Admin->Delegate->Allotment->deleteAll(array('Allotment.delegate_id' => $delegate_id)))
			{
			$this->Admin->Delegate->read(null, 1);
			$this->Admin->Delegate->set(array('alloted' => 0));
			$this->Admin->Delegate->save();
			$this->Session->setFlash("Allotment Deleted");
			}
		
		}
	}
	
	function admin()
	{
		$this->set("totalApplications",$this->Admin->Delegate->find('count'));
	}
	
	
}
?>