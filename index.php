<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<?php
include 'include/head.php';
include 'include/header.php';
include 'include/ul.php';
include 'include/footer.php';
?>


<body>


    <section>
        <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Fluid jumbotron</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
        </div>
    </section>
    <br>
    <section>
        <a href=""><button type="button" class="btn btn-primary btn-lg">Home</button></a>
        <a href=""><button type="button" class="btn btn-secondary btn-lg">Ajouter des doneés</button></a>
    </section>



    <?php


if (isset($_POST["submit"]))[
    $_SESSION["form"] = [

       'prenom' => $_POST ['first-name'],
        
        'nom' => $_POST ['last-name'],

        'sexe' => $_POST ['last-name'],

    ]
]




















    ?>



</body>
</html>