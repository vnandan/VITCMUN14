<?php

class DelegatesController extends AppController
{
	//var $scaffold;
	
	function index()
	{
		$councilList = array("UNOOSA"=>"UNOOSA","UNGA-DISEC"=>"UNGA-DISEC","HSC"=>"HSC","HRC"=>"HRC","UNEP"=>"UNEP");
		$this->set("councilList",$councilList);
		if ($this->request->is('post'))
		{
		//print_r($this->request->data);
		$this->Delegate->create();
		
		if ($this->Delegate->saveAssociated($this->request->data))
		{
                $this->Session->setFlash(__('Delegate registered.'));
                return $this->redirect(array('action' => 'regSuccess'));
		}
		$this->Session->setFlash(__('Delegate not registered.'),true);
		//return $this->redirect(array('action' => 'regUnsuccess'));
		}
	}
	
	
	function regSuccess()
	{}
	
	function regUnsuccess()
	{}
	
	function allotments($delegateName)
	{
		$result = $this->Delegate->find("all", array('conditions' => array('name like' => "%$delegateName%")));	
		$this->set('delegates',$result);	
	}


 	
 
	
}
?>