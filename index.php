<html>
<head> </head>
<body>
<?php
    if(!($f = fopen("file.txt", "r"))) {
        die ('Error open file');
    }

    $s = fgets($f, 70);

    echo $s.'<br>';

    $s = fgets($f, 70);

    echo $s.'<br>';


    $r =fclose($f);

    if ($f == true){
        echo '<br>File close';
    } else {
        die ('Close file error');
    }

?>
</body>
<html>