
/**
 * Created by PhpStorm.
 * User: PAUL
 * Date: 01/12/2016
 * Time: 21:59
 * Utilise le Controleur "Modification Article"
 */
<form method="POST" action="../Controlers/ControllerModifArticle">
<?php
if($val_button==false){
    echo"<select name=\"nom\" size=\"1\">";
    foreach ($tab as $title) {
        echo "<option>$title";

    }
    echo "</select>";
    echo '<input type="submit" value="envoyer" name="valider">';
}else{
    echo "Contenue de l'article ";
    echo "<textarea name=\"body\" rows=\"10\" cols=\"50\">$contenue</textarea>";
    echo '<input type="submit" value="envoyer" name="Valcontenue">';
}

?>
</form>

