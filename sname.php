<?php
$a=array("Robert","Derick","Jonathan","Bruce");
arsort($a);
echo "<table border=1><tr><th>Key</th><th>Names</th></tr>";
foreach($a as $k=>$v)
{
    echo "<tr><td>$k</td><td>$v</td></tr>";
}
echo "</table>";
asort($a);
echo "<br><table border=1><tr><th>Key</th><th>Names</th></tr>";
foreach($a as $k=>$v)
{
    echo "<tr><td>$k</td><td>$v</td></tr>";
}
echo "</table>";
?>