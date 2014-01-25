<style>
    body
    {
    background: #FFF;
    font-family: Arial;
    }

</style>
<script>
    function unallot(delegate_id)
    {
        $.post("../../unallot/"+delegate_id, function(data)
        {
            window.location = window.location.pathname;     
            //alert(data);
            //http://localhost/VITCMUN14/registration/admin/unallot/1
        });
    }
    
    function allot(delegate_id,council,country)
    {
        $.post("../../allot/"+delegate_id+"/"+council+"/"+$("#AllotmentCountry option:selected").text(), function(data)
        {
            //curUrl = window.location.path;
        //alert(window.location.pathname);
        window.location = window.location.pathname; 
        });
    }
    
    function gotoCouncil()
    {
        //alert($("#selectCouncil :selected").text());
        window.location = "/VITCMUN14/registration/users/view/"+$("#selectCouncil :selected").text()+"/"+$("#selectPreference :selected").text();
    }
    $(document).ready(function()
                      {
                        
                        $('#selectCouncil option[value="<?php echo array_search($council,$councilNameList);?>"]').attr('selected','selected');
                        $('#selectPreference option[value="<?php echo $preference-1;?>"]').attr('selected','selected');
                        });


</script>
<table>
<?php
echo "<tr><td>".$this->Form->input('selectCouncil', array('type'=>'select','options'=>$councilNameList, 'value'=>$councilNameList , 'label'=>'Council', 'style'=>'display: inline'))."</td>";
echo "<td>".$this->Form->input('selectPreference', array('type'=>'select', 'label'=>'Preference','options'=>array('1','2','3'), 'style'=>'display: inline'))."</td>";
echo "<td>".$this->Form->input('Go!',array('type'=>'button','id'=>'goCouncil','onclick'=>'gotoCouncil(this.value)', 'label'=>false, 'style'=>'display: inline', 'class'=>'btn btn-sm btn-primary'))."</td>";
?>
</table>

<?php
 $unalloted = unserialize($unalloted);
 $alloted = unserialize($alloted);
?>


<?php
//echo count($unalloted);
if(count($unalloted)>0)
{
    echo "Unalloted Delegates";
?>
<table class="table" id="unallotedDelegates">
    <tr><thead>
        <th>Name</th>
        <th>Institute</th>
        <th>As Delegate</th>
        <th>As E.B.</th>
        <th>MUN XP</th>
        <th>Country1</th>
        <th>Country2</th>
        <th>Country3</th>
        <th>Action</th>
    </thead></tr>
    <?php
    foreach($unalloted as $unAlloted)
    {
        echo "<tr>";
        echo "<td>".$unAlloted['Delegate']['name']."</td>"."<td>".$unAlloted['Delegate']['institution']."</td>"."<td>".$unAlloted['Delegate']['munasdelegate']."</td>"."<td>".$unAlloted['Delegate']['munaseb']."</td>"."<td>".$unAlloted['Delegate']['previousxp']."</td>";
        switch($preference)
        {
            case 1:
                echo "<td>".$unAlloted['Firstpreference']['country1']."</td>"."<td>".$unAlloted['Firstpreference']['country2']."</td>"."<td>".$unAlloted['Firstpreference']['country3']."</td>";
                break;
            case 2:
                echo "<td>".$unAlloted['Secondpreference']['country1']."</td>"."<td>".$unAlloted['Secondpreference']['country2']."</td>"."<td>".$unAlloted['Secondpreference']['country3']."</td>";
                break;
            case 3:
                echo "<td>".$unAlloted['Thirdpreference']['country1']."</td>"."<td>".$unAlloted['Thirdpreference']['country2']."</td>"."<td>".$unAlloted['Thirdpreference']['country3']."</td>";
                break;
        }
          echo "<td>";
          echo $this->Form->input('Allotment.country', array('options' => $uniqueCountry,'label' => false));
          echo "<td><button class='btn btn-xs btn-primary' onclick='allot(".$unAlloted['Delegate']['id'].",\"".$council."\")'>Allot</button></td>";
        echo "</tr>";
    }
    ?>
</table>

<?php
}
//end condition to check if any elements exist in $unalloted
?>







<?php
if(count($alloted)>0)
{
    echo 'Alloted delegates';
?>
<table class="table" id="allotedDelegates">
    <tr><thead>
        <th>Name</th>
        <th>Institute</th>
        <th>As Delegate</th>
        <th>As E.B.</th>
        <th>MUN XP</th>
        <th>Country1</th>
        <th>Country2</th>
        <th>Country3</th>
        <th>Alloted</th>
        <th>Action</th>
    </thead></tr>
    <?php
    foreach($alloted as $Alloted)
    {
        echo "<tr>";
        echo "<td>".$Alloted['Delegate']['name']."</td>"."<td>".$Alloted['Delegate']['institution']."</td>"."<td>".$Alloted['Delegate']['munasdelegate']."</td>"."<td>".$Alloted['Delegate']['munaseb']."</td>"."<td>".$Alloted['Delegate']['previousxp']."</td>";
        switch($preference)
        {
            case 1:
                echo "<td>".$Alloted['Firstpreference']['country1']."</td>"."<td>".$Alloted['Firstpreference']['country2']."</td>"."<td>".$Alloted['Firstpreference']['country3']."</td>";
                break;
            case 2:
                echo "<td>".$Alloted['Secondpreference']['country1']."</td>"."<td>".$Alloted['Secondpreference']['country2']."</td>"."<td>".$Alloted['Secondpreference']['country3']."</td>";
                break;
            case 3:
                echo "<td>".$Alloted['Thirdpreference']['country1']."</td>"."<td>".$Alloted['Thirdpreference']['country2']."</td>"."<td>".$Alloted['Thirdpreference']['country3']."</td>";
                break;
        }
        echo "<td>".$Alloted['Allotment']['council']."-".$Alloted['Allotment']['country'];
        echo "<td><button class='btn btn-xs btn-danger' onclick='unallot(".$Alloted['Allotment']['delegate_id'].")'>Unallot</button></td>";
        
        echo "</tr>";
    }
    ?>
</table>
<?php
}   //end check condition for $alloted length >0
?>