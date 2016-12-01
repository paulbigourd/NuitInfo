<?php
    foreach ($tab as $element)
    {
        echo $element['title'];
        echo "<img src=\"$element[img]\" alt=\"image\" />";
        echo $element['body'];
    }
?>