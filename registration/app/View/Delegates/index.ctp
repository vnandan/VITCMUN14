<style>
    body
    {
        background: #FFF;
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
</style>
<div class = "col-md-8 col-md-offset-2">
<table class='table table-hover table-striped table-responsive'>
<?php
echo $this->Form->create('Delegate', array('class' => 'form-inline', 'role' => 'form'));
echo "<tr><td width = '30'><label for=''>Full Name</label></td>";
echo "<td>";echo $this->Form->input('name', array('label' => false,));echo "</td></tr>";
echo "<tr><td width = '30'><label for=''>Institution</label></td>";
echo "<td>";echo $this->Form->input('institution', array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for=''>E-mail</label></td>";
echo "<td>";echo $this->Form->input('email', array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for=''>Contact No.</label></td>";
echo "<td>";echo $this->Form->input('contact', array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for=''>MUNs as delegate</label></td>";
echo "<td>";echo $this->Form->input('munasdelegate', array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for=''>MUNs as E.B.</label></td>";
echo "<td>";echo $this->Form->input('munaseb', array('label' => false));echo "</td></tr>";


echo "<tr><td width = '30'><label for=''>Council first preference</label></td>";
echo "<td>";echo $this->Form->input('Firstpreference.council',array('label' => false,'type' => 'select', 'options' => $councilList));echo "</td></tr>";
echo "<tr><td width = '30'><label for=''>Country Preference 1</label></td>";
echo "<td>";echo $this->Form->input('Firstpreference.country1',array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for=''>Country Preference 2</label></td>";
echo "<td>";echo $this->Form->input('Firstpreference.country2',array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for=''>Country Preference 3</label></td>";
echo "<td>";echo $this->Form->input('Firstpreference.country3',array('label' => false));echo "</td></tr>";


echo "<tr><td width = '30'><label for=''>Council second preference</label></td>";
echo "<td>";echo $this->Form->input('Secondpreference.council',array('label' => false,'type' => 'select', 'options' => $councilList));echo "</td></tr>";
echo "<tr><td width = '30'><label for=''>Country Preference 1</label></td>";
echo "<td>";echo $this->Form->input('Secondpreference.country1',array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for=''>Country Preference 2</label></td>";
echo "<td>";echo $this->Form->input('Secondpreference.country2',array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for=''>Country Preference 3</label></td>";
echo "<td>";echo $this->Form->input('Secondpreference.country3',array('label' => false));echo "</td></tr>";


echo "<tr><td width = '30'><label for=''>Council third preference</label></td>";
echo "<td>";echo $this->Form->input('Thirdpreference.council',array('label' => false,'type' => 'select', 'options' => $councilList));echo "</td></tr>";
echo "<tr><td width = '30'><label for=''>Country Preference 1</label></td>";
echo "<td>";echo $this->Form->input('Thirdpreference.country1',array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for=''>Country Preference 2</label></td>";
echo "<td>";echo $this->Form->input('Thirdpreference.country2',array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for=''>Country Preference 3</label></td>";
echo "<td>";echo $this->Form->input('Thirdpreference.country3',array('label' => false));echo "</td></tr>";


echo "<tr><td width = '30'><label for=''>Previous MUN experience</label></td>";
echo "<td>";echo $this->Form->input('previousxp', array('label' => false));echo "</td></tr>";
echo "<tr><td width = '30'><label for=''>Accomodation</label></td>";
echo "<td>";echo $this->Form->input('accomodation', array('label' => false));echo "</td></tr>";
echo "<td></td><td>";echo $this->Form->end('Register', array('class' => 'btn btn-large'));echo "</td></tr>";
?>
</table>
</div>

<div class="error-message"></div>