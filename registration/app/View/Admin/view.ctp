<pre>
<?php
    if(isset($error))
    {
        echo $error;
        exit;
    }
 echo "<h1>UNALLOTED DELEGATES</h1>";
 print_r(unserialize($unalloted));
 echo "<h1>ALLOTED DELEGATES</h1>";
 print_r(unserialize($alloted));
?>
</pre>