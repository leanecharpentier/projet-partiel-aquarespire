<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('fragments/head.php') ?>
    <title>Contact</title>
</head>
<body class="body-contact">
    <header>
        <?php include('fragments/header.php') ?>
    </header>

    <main>
        <?php 
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $formContact = $_REQUEST['type'];
                if ($formSupprimer == 'form-contact') {
                    // Récupération des données
                    $nom = $_REQUEST['nom'];
                    $prenom = $_REQUEST['prenom'];
                    $email = $_REQUEST['email'];
                    $num = $_REQUEST['num'];
                    $objet = $_REQUEST['objet'];
                    $message = $_REQUEST['message'];
                    
                    // Traitement du formulaire
                    $file = fopen('files/contact.txt', 'a+');
                    $texte = $nom . ' ' . $prenom . ' ' . $email . ' ' . $num . ' :' . PHP_EOL . $objet . PHP_EOL . $message . PHP_EOL;
                    fwrite($file, $texte . PHP_EOL);
                    
                    // Suppression des variables
                    unset($nom);
                    unset($prenom);
                    unset($email);
                    unset($num);
                    unset($objet);
                    unset($message);                    
                }
            }

        ?>

        <form class="form-box" action="contact.php" method="post">
            <input type='hidden' value="form-contact" name="type"/>
            <h2 class="titre-form">
                Une question à propos de notre produit ou une envie autre ? Contactez nous !
            </h2>

            <div class="box">
                <input type="text" name="nom" id="nom" required>
                <label for="nom"><ion-icon name="person-outline"></ion-icon>Nom</label>
            </div>

            <div class="box">
                <input type="text" name="prenom" id="prenom" required>
                <label for="prenom"><ion-icon name="person-outline"></ion-icon>Prénom</label>
            </div>

            <div class="box">
                <input type="mail" name="email" id="email" required>
                <label for="email"><ion-icon name="mail-outline"></ion-icon>Adresse mail</label>
            </div>

            <div class="box">
                <input type="tel" name="num" id="num" required>
                <label for="num"><ion-icon name="call-outline"></ion-icon>Numéro de téléphone</label>
            </div>

            <div class="box">
                <select name="objet" id="objet" required>
                    <option value=""></option>
                    <option value="Information produit">Information produit</option>
                    <option value="Autre">Autre</option>
                </select>
                <label for="objet">Objet du message</label>
            </div>

            <div class="box">
                <textarea name="message" id="message" cols="30" rows="5" required></textarea>
                <label for="message"><ion-icon name="chatbox-ellipses-outline"></ion-icon>Votre message...</label>
            </div>

            <button type="submit" class="btn-submit">Envoyer<ion-icon name="paper-plane-outline"></ion-icon></button>
        </form>
    </main>

    <footer>
        <?php include('fragments/footer.php') ?>
    </footer>

    <?php include('fragments/ionicon.php') ?>

</body>
</html>