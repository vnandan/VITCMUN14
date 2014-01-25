<?php
echo $this->Form->create('Allotment');
//echo $this->Form->input('delegate_id');
echo $this->Form->input('council');
echo $this->Form->input('country',array('type'=>'select','options'=>$country));
echo $this->Form->end('Allot!');
?>