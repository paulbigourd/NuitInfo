<Form method="POST" action="../Controlers/ControllerSupprModo">

    <SELECT name="login">
        <?php
            foreach($tab as $element)
            {
                echo"<OPTION>$element"
            }
        ?>
    </SELECT>
    <input type="submit" value="Envoyer" name="Valider">
    
</Form>