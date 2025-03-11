<?php
$tomBe=array("B","B");
$tombKi=array("","","","");
$Betu="A";
$indexMax=count($tomBe)-1;
for($i=0;$i<=$indexMax;$i++)
{
    $tombKi[$i]=$tomBe[$i].$betu;
    $tombKi[$i]=$tombKi[$i].$tombKi[$i];
}
print_r($tomBe); print "<br>";
print_r($tombKi); print "<br>";
