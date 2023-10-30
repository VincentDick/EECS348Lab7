<?php
$num = $_POST['size'];
echo "<table border=\"1\">";
echo'<tr>';
$space = ' ';
for ($i = 0; $i <= $num; $i++){
    if ($i == 0){
        echo '<td>' .$space.'</td>';
    }
    else {
        echo '<td>' .$i.'</td>';
    }
}
echo'</tr>';


        for ($r =1; $r <= $num; $r++){

            echo'<tr>';
            echo '<td>' .$r.'</td>';

            for ($c = 1; $c <= $num; $c++){
                echo '<td>' .$c*$r.'</td>';
            } 
            echo '</tr>';

        }

echo"</table>";
?>