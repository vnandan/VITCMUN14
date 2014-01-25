<?php
class User extends AppModel
{
    var $name = "User";
    var $hasMany = array("Delegate","Allotment","Firstpreference","SecondPreference","ThirdPreference");
    
}
?>