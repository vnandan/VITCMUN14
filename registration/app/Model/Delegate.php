<?php
class Delegate extends AppModel
{
	var $name = "Delegate";
	var $hasOne = array("Firstpreference","Secondpreference","Thirdpreference","Allotment");
	//var $belongsTo = array("Admin");
}
?>