<!DOCTYPE html>
<html>
<body>

<?php
$ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
echo '<ol>';
foreach($ar_buah as $k =>$v){
    echo '<li>'.$k.' - ' . $v .'</li>';
    }
    echo '</ol>';
    rsort($ar_buah);
    echo '<hr/>';
    echo '<ol>';
    foreach($ar_buah as $k =>$v){
        echo '<li>'.$k.' - ' . $v .'</li>';
        }
    echo '</ol>';
?>

<?php
$a=array("a"=>"red","b"=>"green","c"=>"blue");
// echo array_shift($a);
// print_r ($a);
echo array_unshift($a,"yellow","purple");
print_r ($a);
?>

</body>
</html>