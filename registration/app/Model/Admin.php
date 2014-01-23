<?php
class Admin extends AppModel
{
    var $name = "Admin";
    var $hasMany = array("Delegate","Allotment","Firstpreference","SecondPreference","ThirdPreference");
}
?>