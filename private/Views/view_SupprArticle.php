<Form methode="POST" action="../Controlers/ControllerSupprArcticle.php">
    <SELECT name="title">
        <?php
            foreach($tab as $element)
            {
                echo "<OPTION>$element</OPTION>";
            }
        ?>
    </SELECT>
    <input type="submit" value="Envoyer" name="Valider">
</Form>