<?php
$this->layout = false;

if(empty($delegates))
{
    echo "<p>Delegate Allotment information not found.</p>";
    exit;
}
?>
<div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-12">
<table class="table table-striped">
    <thead>
        <th>Name</th>
        <th>Institution</th>
        <th>Council</th>
        <th>Country</th>
    </thead>
<?php
foreach($delegates as $delegate)
{
    echo "<tr><td>".$delegate['Delegate']['name']."</td><td>".$delegate['Delegate']['institution']."</td>";
    if(empty($delegate['Allotment']['council']))
    {
    echo "<td>Not Alloted.</td>";
    echo "<td>Not Alloted.</td>";
    exit;
    }
    
    echo "<td>".$delegate['Allotment']['council']."</td><td>".$delegate['Allotment']['country']."</td></tr>";
}
?>
</table>
<br><br><br><br>
</div>
</div>