<html>
    <body>
    <form method=POST>
        <table>
            <tr>
                <td>Enter number:
                    <input type=number name="n" placeholder="enter enumber">
                </td>
            </tr>
            <tr>
                <td>Enter unit:
                <input type=number name="u" placeholder="enter unit">
            </td>
        </tr>
        <tr>
            <td>
                    <select name="t">
                        <option value="rrl">Rural</option> 
                        <option value="rsdl">Residential</option> 
                        <option value="cml">Commercial</option>
                    </select>
                </td>
            </tr>
        </table>
            <input type="submit" name="submit">
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $n=$_POST['n'];
    $u=$_POST['u'];
    $t=$_POST['t'];
    if($t=='rrl')
    {
        $e=5;
        $p=(($u*.25)+$e);
        echo "\r\nElectricity Number:$n";
        echo "\r\nUnit:$u";
        echo "\r\nTariff:$t";
        echo "\r\nExtra charge:$e";
        echo "\r\nPrice:$p";
    }
    if($t=='rsdl')
    {
        $e=20;
        $p=(($u*.25)+$e);
        echo "\r\nElectricity Number:$n";
        echo "\r\nUnit:$u";
        echo "\r\nTariff:$t";
        echo "\r\nExtra charge:$e";
        echo "\r\nPrice:$p";
    }
    if($t=='cml')
    {
        $e=50;
        $p=(($u*.25)+$e);
        echo "\r\nElectricity Number:$n";
        echo "\r\nUnit:$u";
        echo "\r\nTariff:$t";
        echo "\r\nExtra charge:$e";
        echo "\r\nPrice:$p";
    }
}
?>

