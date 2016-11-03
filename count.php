<?php
$numbers = $_POST["numbers"];
$numbers = explode(' ',$numbers);
echo '<strong>numbers:</strong><br/>';
print_r ($numbers);
$result = array('<br/><strong>num</strong>' => '<strong>count</strong><br/>');
foreach ($numbers as $i)
{
        if (array_key_exists($i,$result))
            $result[$i]++;
        else
            $result[$i] = 1;
}
foreach ($result as $k => $v)
    echo $k.'&nbsp;&nbsp;&nbsp;'.$v.'<br>';
?>
