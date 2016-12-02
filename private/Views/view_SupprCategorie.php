<form method="POST" action="../Controlers/ControllerSupprCategorie.php">
    <SELECT name="categorie">
        <?php
            foreach($tab as $element)
            {
                echo"<OPTION>$element";
            }
        ?>
    </SELECT>
    <input type="submit" name="valider" value="Envoyer">
</form>