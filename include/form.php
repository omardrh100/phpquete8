<?php
session_start();
?>



<?php

$_SESSION["form"] = "formulaire";
echo "le formulaire est bien ....";

?>

<section>

  <form action="index.php" method="post">
  <p>Votre nom : <input type="text" name="nom" /></p>
  <p>Votre prenom : <input type="text" name="prenom" /></p>
  <p>Votre age : <input type="text" name="age" /></p>

  <div>
    <input type="radio" name="sexe" value="homme"
          checked>
    <label for="homme">homme</label>
  </div>

  <div>
    <input type="radio" name="sexe" value="femme">
    <label for="femme">femme</label>
  </div>

  <div>
    <input type="radio" name="sexe" value="alien">
    <label for="alien">alien</label>
  </div>

  <p><input type="submit" value="envoyer" name="submit"></p>
  </form>

</section>


