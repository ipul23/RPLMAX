<?php

include 'db_connect.php';

$query = "SELECT * FROM inprogress";
$result = mysqli_query($connect,$query);
    if (mysqli_num_rows($result)){
    	echo "yes";
    }
    else {
        $err = mysqli_error();
        die("<br>{$query}<br>*** {$err} ***<br>");
    }
echo("<table>");
$first_row = true;
while ($row = mysqli_fetch_assoc($result)) {
    if ($first_row) {
        $first_row = false;
        // Output header row from keys.
        echo '<tr>';
        foreach($row as $key => $field) {
            echo '<th>' . htmlspecialchars($key) . '</th>';
        }
        echo '</tr>';
    }
    echo '<tr>';
    foreach($row as $key => $field) {
        echo '<td>' . htmlspecialchars($field) . '</td>';
    }
    echo '</tr>';
}
echo("</table>");
$connect->close();

?>