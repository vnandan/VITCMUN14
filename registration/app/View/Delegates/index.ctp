<?php
echo $this->Form->create('Delegate');
echo $this->Form->input('name');
echo $this->Form->input('institution');
echo $this->Form->input('email');
echo $this->Form->input('contact');
echo $this->Form->input('munasdelegate');
echo $this->Form->input('munaseb');

echo $this->Form->input('Firstpreference.council',array('label' => 'First Council Preference','type' => 'select', 'options' => $councilList));
echo $this->Form->input('Firstpreference.country1',array('label' => 'Country Preference 1'));
echo $this->Form->input('Firstpreference.country2',array('label' => 'Country Preference 2'));
echo $this->Form->input('Firstpreference.country3',array('label' => 'Country Preference 3'));

echo $this->Form->input('Secondpreference.council',array('label' => 'Second Council Preference','type' => 'select', 'options' => $councilList));
echo $this->Form->input('Secondpreference.country1',array('label' => 'Country Preference 1'));
echo $this->Form->input('Secondpreference.country2',array('label' => 'Country Preference 2'));
echo $this->Form->input('Secondpreference.country3',array('label' => 'Country Preference 3'));


echo $this->Form->input('Thirdpreference.council',array('label' => 'Third Council Preference','type' => 'select', 'options' => $councilList));
echo $this->Form->input('Thirdpreference.country1',array('label' => 'Country Preference 1'));
echo $this->Form->input('Thirdpreference.country2',array('label' => 'Country Preference 2'));
echo $this->Form->input('Thirdpreference.country3',array('label' => 'Country Preference 3'));


echo $this->Form->input('previousxp');
echo $this->Form->input('accomodation');
echo $this->Form->end('Register');
?>