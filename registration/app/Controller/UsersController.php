<?php
class UsersController extends AppController
{
// Pass settings in $components array
	public $components = array('Session','Auth');
	
	public function beforeFilter()
	{
	 $this->Auth->loginAction = array('controller'=>'users','action'=>'login');
	 $this->Auth->allow('*');
	 $this->Auth->loginRedirect = array('controller'=>'users','action'=>'index');
	 $this->Auth->logoutRedirect = array('controller'=>'users','action'=>'login');
	
	}
	
	public function login() {
		
	if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirectUrl());
            // Prior to 2.3 use
            // `return $this->redirect($this->Auth->redirect());`
        } else {
            $this->Session->setFlash(
                __('Username or password is incorrect'),
                'default',
                array(),
                'auth'
            );
	    }	
	}
	}
	
	public function logout() {	
	    return $this->redirect($this->Auth->logout());
	}
	
	function index()
	{
		$this->set("totalRegistrations",$this->User->Delegate->find('count'));
	}
	
	
	
	
	
	function view($council,$preference)
	{
		  $councilNameList= ["UNOOSA",'UNGA-DISEC','HRC','HSC','UNEP'];
		  $this->set("councilNameList",$councilNameList);
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
		$result = $this->User->Delegate->Allotment->query("SELECT DISTINCT country from ALLOTMENTS");
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
				$this->set('unalloted',serialize($this->User->Delegate->find('all', array('conditions' => array('alloted' => 0,'Firstpreference.council' => $council)))));
				$this->set('alloted',serialize($this->User->Delegate->find('all', array('conditions' => array('alloted' => 1,'Firstpreference.council' => $council)))));
				break;
			case 2:
				$this->set('unalloted',serialize($this->User->Delegate->find('all', array('conditions' => array('alloted' => 0,'Secondpreference.council' => $council)))));
				$this->set('alloted',serialize($this->User->Delegate->find('all', array('conditions' => array('alloted' => 1,'Secondpreference.council' => $council)))));
				break;
			case 3:
				$this->set('unalloted',serialize($this->User->Delegate->find('all', array('conditions' => array('alloted' => 0,'Thirdpreference.council' => $council)))));
				$this->set('alloted',serialize($this->User->Delegate->find('all', array('conditions' => array('alloted' => 1,'Thirdpreference.council' => $council)))));
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
		
		$this->User->Delegate->Allotment->create();
		if ($this->User->Delegate->Allotment->save($this->request->data))
		{
		$this->User->Delegate->id=$delegate_id;
		$this->User->Delegate->saveField('alloted',1);
		//$this->User->Delegate->read(null, 1);
		//$this->User->Delegate->set(array('alloted' => 1));
		//$this->User->Delegate->save();
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
			if($this->User->Delegate->Allotment->deleteAll(array('Allotment.delegate_id' => $delegate_id)))
			{
			$this->User->Delegate->id=$delegate_id;
			$this->User->Delegate->saveField('alloted',0);
			//$this->User->Delegate->read(null, 1);
			//$this->User->Delegate->set(array('alloted' => 0));
			//$this->User->Delegate->save();
			$this->Session->setFlash("Allotment Deleted");
			}
		
		}
	}
	

	
}
//4184e8dd89aadcb01bc92b339d4df1d2e4f66773
?>
