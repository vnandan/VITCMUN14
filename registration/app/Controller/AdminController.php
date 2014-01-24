<?php
class AdminController extends AppController
{
	function index()
	{
		$this->set("totalRegistrations",$this->Admin->Delegate->find('count'));
	}
	
	
	
	
	function view($council,$preference)
	{
		$this->set('preference',$preference);
		$this->set('council',$council);
		$country = array();
		
		if($council=='UNOOSA')
		{
			$countrynames = ["india","japan","pakistan","indonesia"];
		}
		else
		if($council=='UNGA-DISEC')
		{
			$countrynames = ["india","japan","pakistan","indonesia"];
		}
		else
		if($council=='HSC')
		{
			$countrynames = ["india","japan","pakistan","indonesia"];
		}
		else
		if($council=='HRC')
		{
			$countrynames = ["india","japan","pakistan","indonesia"];
		}
		else
		if($council=='UNEP')
		{
			$countrynames = ["india","japan","pakistan","indonesia"];
		}
		
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
		$this->set("uniqueCountry",$uniqueCountry);
		
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
	
	public function allot($delegate_id,$council,$countryname)
	{
		
		//$this->Session->userId = 1;
		
		$this->request->data['Allotment']['delegate_id']=$delegate_id;
		$this->request->data['Allotment']['council']=$council;
		$this->request->data['Allotment']['country']=$countryname;
		
		$this->Admin->Delegate->Allotment->create();
		if ($this->Admin->Delegate->Allotment->save($this->request->data))
		{
		$this->Admin->Delegate->id=$delegate_id;
		$this->Admin->Delegate->saveField('alloted',1);
		//$this->Admin->Delegate->read(null, 1);
		//$this->Admin->Delegate->set(array('alloted' => 1));
		//$this->Admin->Delegate->save();
		//$this->Session->setFlash("Allotment made.");
		
		}
		//$this->Session->setFlash("Unable to allot.");

	}
	
	function unallot($delegate_id=null)
	{
		if(!$delegate_id)
		{
			echo "invalid Id";
		}
		else
		{
			if($this->Admin->Delegate->Allotment->deleteAll(array('Allotment.delegate_id' => $delegate_id)))
			{
			$this->Admin->Delegate->id=$delegate_id;
			$this->Admin->Delegate->saveField('alloted',0);
			//$this->Admin->Delegate->read(null, 1);
			//$this->Admin->Delegate->set(array('alloted' => 0));
			//$this->Admin->Delegate->save();
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