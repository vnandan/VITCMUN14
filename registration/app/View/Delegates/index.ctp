<style>
    body
    {
        background: #F2F2F2;
    }
    input
    {
        height: 2.2em;
        width: 50%;

    }
    td
    {
     width: 30px;   
    }
    h1
  {
    font-size: 3em;
    color: black;
  }
</style>
<div class = "col-md-8 col-md-offset-2">
    <h1>Delegate Registration</h1>
<table class='table table-hover  table-responsive'>
<?php
echo $this->Form->create('Delegate', array('class' => 'form-inline', 'role' => 'form'));
echo "<tr><td width = '30'><label for='data[Delegate][name]'>Full Name</label></td>";
echo "<td>";echo $this->Form->input('name', array('label' => false,));echo "</td></tr>";
echo "<tr><td width = '30'><label for='data[Delegate][institution]'>Institution</label></td>";
echo "<td>";echo $this->Form->input('institution', array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for='data[Delegate][email]'>E-mail</label></td>";
echo "<td>";echo $this->Form->input('email', array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for='data[Delegate][contact]'>Contact No.</label></td>";
echo "<td>";echo $this->Form->input('contact', array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for='data[Delegate][munasdelegate]'>MUNs as delegate</label></td>";
echo "<td>";echo $this->Form->input('munasdelegate', array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for='data[Delegate][munaseb]'>MUNs as E.B.</label></td>";
echo "<td>";echo $this->Form->input('munaseb', array('label' => false));echo "</td></tr>";


echo "<tr><td width = '30'><label for='data[Firstpreference][council]'>Council first preference</label></td>";
echo "<td>";echo $this->Form->input('Firstpreference.council',array('label' => false,'type' => 'select', 'options' => $councilList));echo "</td></tr>";
echo "<tr><td width = '30'><label for='data[Firstpreference][country1]'>Country Preference 1</label></td>";
echo "<td>";echo $this->Form->input('Firunasebstpreference.country1',array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for='data[Firstpreference][country2]'>Country Preference 2</label></td>";
echo "<td>";echo $this->Form->input('Firstpreference.country2',array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for='data[Firstpreference][country3]'>Country Preference 3</label></td>";
echo "<td>";echo $this->Form->input('Firstpreference.country3',array('label' => false));echo "</td></tr>";


echo "<tr><td width = '30'><label for='data[Secondpreference][council]'>Council second preference</label></td>";
echo "<td>";echo $this->Form->input('Secondpreference.council',array('label' => false,'type' => 'select', 'options' => $councilList));echo "</td></tr>";
echo "<tr><td width = '30'><label for='data[Secondpreference][country1]'>Country Preference 1</label></td>";
echo "<td>";echo $this->Form->input('Secondpreference.country1',array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for='data[Secondpreference][country2]'>Country Preference 2</label></td>";
echo "<td>";echo $this->Form->input('Secondpreference.country2',array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for='data[Secondpreference][country3]'>Country Preference 3</label></td>";
echo "<td>";echo $this->Form->input('Secondpreference.country3',array('label' => false));echo "</td></tr>";


echo "<tr><td width = '30'><label for='data[Thirdpreference][council]'>Council third preference</label></td>";
echo "<td>";echo $this->Form->input('Thirdpreference.council',array('label' => false,'type' => 'select', 'options' => $councilList));echo "</td></tr>";
echo "<tr><td width = '30'><label for='data[Thirdpreference][country1]'>Country Preference 1</label></td>";
echo "<td>";echo $this->Form->input('Thirdpreference.country1',array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for='data[Thirdpreference][country2]'>Country Preference 2</label></td>";
echo "<td>";echo $this->Form->input('Thirdpreference.country2',array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for='data[Thirdpreference][country3]'>Country Preference 3</label></td>";
echo "<td>";echo $this->Form->input('Thirdpreference.country3',array('label' => false));echo "</td></tr>";


echo "<tr><td width = '30'><label for='data[Delegate][previousxp]'>Previous MUN experience</label></td>";
echo "<td>";echo $this->Form->input('previousxp', array('label' => false,'cols'=>33,'placeholder'=>'MUN-Council-Year-Award(if any).VITCMUN-UNGA-2013-BestDelegate'));echo "</td></tr>";
echo "<tr><td width = '30'><label for='data[Delegate][accomodation]'>Accomodation</label></td>";
echo "<td>";echo $this->Form->input('accomodation', array('label' => false));echo "</td></tr>";
echo "<td></td><td>";echo $this->Form->end('Register', array('class' => 'btn btn-large btn-primary'));echo "</td></tr>";
?>
</table>
</div>

<div class="error-message"></div>