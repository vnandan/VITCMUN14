<?php
echo $this->Form->create('Delegate');
echo $this->Form->input('name');
echo $this->Form->input('institution');
echo $this->Form->input('email');
echo $this->Form->input('contact');
echo $this->Form->input('Firstpreference.council');
echo $this->Form->input('Firstpreference.country1');
echo $this->Form->input('Firstpreference.country2');
echo $this->Form->input('Firstpreference.country3');

echo $this->Form->input('Secondpreference.council');
echo $this->Form->input('Secondpreference.country1');
echo $this->Form->input('Secondpreference.country2');
echo $this->Form->input('Secondpreference.country3');


echo $this->Form->input('Thirdpreference.council');
echo $this->Form->input('Thirdpreference.country1');
echo $this->Form->input('Thirdpreference.country2');
echo $this->Form->input('Thirdpreference.country3');


echo $this->Form->input('previousxp');
echo $this->Form->input('accomodation');
echo $this->Form->end('Register');
?>