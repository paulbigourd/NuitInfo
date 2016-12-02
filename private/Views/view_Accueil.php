<?php
    foreach ($tab as $element)
    {
        echo "<h1>";
        echo $element['titre'];
        echo"</h1>";
        //echo "<img src=\"$element['url_image']\" alt=\"image\" />";
        echo $element['contenu'];
    }
?>