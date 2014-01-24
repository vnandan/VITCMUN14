Total Registrations till now : <?php echo $totalRegistrations; ?>

<ul style="list-style: none;">
<?php
echo "<li>";echo $this->Html->link('UNOOSA', array('action' => 'view/UNOOSA/1'));echo "</li>";
echo "<li>";echo $this->Html->link('UNGA-DISEC', array('action' => 'view/UNGA-DISEC/1'));echo "</li>";
echo "<li>";echo $this->Html->link('HSC', array('action' => 'view/HSC/1'));echo "</li>";
echo "<li>";echo $this->Html->link('HRC', array('action' => 'view/HRC/1'));echo "</li>";
echo "<li>";echo $this->Html->link('UNEP', array('action' => 'view/UNEP/1'));echo "</li>";

?>
</ul>