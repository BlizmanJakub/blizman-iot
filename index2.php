<?php
    echo '<h1> cisla.php .txt</h1>';
    $file = fopen("cisla1.txt", "w");
    fwrite($file, "1 2 3".PHP_EOL);
    fwrite($file, "10 3 4");
    fclose($file);
    ?>