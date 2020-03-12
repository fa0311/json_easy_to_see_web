<?php
function json_print($json)
{
    $data = (array) json_decode($json, true);
    if ($data == false) {
        return false;
    }
    echo "<table>";
    json_print2($data);
    echo "</table>";
    return true;
}
function json_print2($data, $num = 0){
    $i = 0;
    while ($num >= $i) {
        $tag = $tag . "<td>";
        $tag_end = $tag_end . "</td>";
        $i++;
    }
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            echo "<tr>" . $tag . $key . $tag_end . "</tr>";
            json_print2($value, $i);
        } else {
            echo "<tr>" . $tag . $key . "<td>" . $value . "</td>" . $tag_end . "</tr>";
        }
    }
}
