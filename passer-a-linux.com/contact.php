<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire de contact</title>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="headerNav">
        <div class="headerMenu">
            <figure>
                <img id="imageTux" src="images/tux-100.svg" alt="logo du site" title="linux-tux">
            </figure>
            <nav class="navbar navbar navbar-expand-lg navbar-dark bg-dark">
                <h1 id="titreSite">Passer à linux !</h1>
            </nav>
        </div>
        <div id="lienNavBar">
            <a href="index.html">ACCUEIL</a>
            <a href="contact.php">CONTACT</a>
            <a href="#">S'INSCRIRE</a>
            <a href="#">SE CONNECTER</a>
        </div>
    </header>

    <div class="container">

        <div id="conteneurFormulaire">
            <h1 id="formulaireContact" class="text-center">Formulaire de contact</h1>
            <h4>Pour toute demande d'installation, veuillez remplir le formulaire de contact. Merci et à bientôt.</h4>
            <hr>
            <form action="#" class="form-control">
                <label for="nom">Votre nom</label>
                <input type="text" name="nom" id="nom" class="form-control">
                <div class="alert alert-danger d-none" role="alert"></div>

                <label for="prenom">Votre prénom</label>
                <input type="text" name="prenom" id="prenom" class="form-control">
                <div class="alert alert-danger d-none" role="alert"></div>

                <label for="email">Votre email</label>
                <input type="text" name="email" id="email" class="form-control">
                <div class="alert alert-danger d-none" role="alert"></div>

                <label for="message">Votre message</label>
                <textarea type="text" name="message" id="message" cols="30" rows="10 class=" form-control"></textarea>
                <div class="alert alert-danger d-none" role="alert"></div>

                <button type="submit" class="btn btn-primary m-2">Envoyer</button>
                <input type="reset" class="btn btn-warning m-2" value="Effacer">
            </form>

            <!-- code php de traitement du formulaire -->

            <?php

            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;

            require 'vendor/phpmailer/phpmailer/src/Exception.php';
            require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
            require 'vendor/phpmailer/phpmailer/src/SMTP.php';

            $retour = mail("patrice.lepic.pl@gmail.com", "essai", "coucou les amis !", "");
            if ($retour) {
                echo "<p>L'email du formulaire a bien été envoyé.</p>";
            }
            ?>
        </div>

        <!-- footer------------------------------------------------------->

        <footer>
            <div class="footer">
                <p class="text-center">&copy 2022 - Passer à Linux -</p>
            </div>
        </footer>
    </div>
    <!-- CDN Bundle Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- lien vers jquery------------------------------------->
    <script src="jquery-3.6.0.min.js"></script>
    <!-- lien vers mon script js -->
    <script src="js/script.js"></script>
</body>

</html>