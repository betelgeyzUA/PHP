<html>
<head> </head>
<body>
<?php
    if(!($f = fopen("file.txt", "r"))) {
        die ('Error open file');
    }

    $s = fread($f, 5);

    echo $s.'<br>';

    $s = fread($f, 16);

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