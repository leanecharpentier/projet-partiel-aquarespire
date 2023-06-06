<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('fragments/head.php') ?>
    <title>Home</title>
</head>
<body class="body-home">
    <header>
        <?php include('fragments/header.php') ?>
    </header>

    <main>
        <div class="presentation">
            <div class="presentation-image">
                <div class="ombre-masque"></div>
                <img src="images/masque2.png" alt="">
            </div>
            <div class="presentation-texte">
                <h1>AquaRespire, un nouveau monde s'ouvre à vous</h1>
                <p>Grâce à ce masque vous pourrez respirez dans l'eau, autant de temps que vous le souhaitez, comme un poisson</p>
                <a class="btn-decouvrir" href="produit.php">Découvrir</a>
            </div>
        </div>

        <div class="bloc-texte">
            <p>La plongée sous-marine fait partie de votre quotidien mais vous trouvez l’équipement de plongée handicapant ?<br><br>
            AquaRespire est la solution ! Avec ce masque dernière génération, vous n’aurez plus besoin de bouteilles d’oxygène car le masque AquaRespire vous permet de respirer sous l’eau comme si vous étiez un poisson.<br><br>
            Son système de filtration d’eau permet de récupérer l’oxygène et donc de respirer comme le font les branchies des poissons. Vous serez ainsi complétement libre de vos mouvements et vous pourrez restez sous l’eau autant de temps que vous le souhaiterez !</p>
        </div>

        <div class="bloc-image">
            <img src="images/plongeurs1" alt="">
            <img src="images/plongeurs2" alt="">
            <img src="images/plongeurs3" alt="">
        </div>

        <div class="carousel">
            <h2 class="carousel-h2">Ce sont les habitués qui en parle le mieux</h2>
            <h3 class="carousel-h3">Découvrez les témoignages de ceux qui utilisent le masque au quotidien</h3>
            <div class="slides">
                <p class="slide">
                    "En tant que plongeur professionnel, j'ai toujours été fasciné par la beauté et la diversité de la vie marine. Cependant, les bouteilles d'oxygène sont encombrantes et limitent la durée de mes plongées. Lorsque j'ai découvert le masque innovant qui filtre l'eau pour fournir de l'oxygène, j'ai été impressionné.<br><br>
                    Grâce à ce masque, je peux plonger pendant des heures sans avoir à me soucier de changer les bouteilles d'oxygène. Cela me permet de me concentrer sur l'exploration de la vie sous-marine et de vivre pleinement ma passion.<br><br>         
                    Je suis ravi de voir des innovations comme celle-ci émerger dans le monde de la plongée, car cela ouvre de nouvelles possibilités pour les plongeurs professionnels et amateurs. Je suis fier de faire partie de cette communauté qui cherche constamment à repousser les limites de l'exploration sous-marine."
                </p>
                <p class="slide">
                    "En tant qu'archéologue sous-marin, mon travail consiste à découvrir des vestiges historiques cachés sous l'eau. Cependant, le besoin constant de changer les bouteilles d'oxygène limite mes plongées et ma capacité à explorer ces sites historiques.<br><br>
                    Lorsque j'ai découvert le masque innovant qui filtre l'eau pour fournir de l'oxygène, j'ai vu cela comme une solution à ce problème. En utilisant ce masque, je peux prolonger mes plongées et explorer plus en profondeur les sites historiques sous-marins.<br><br>
                    Cela m'a permis de découvrir des artefacts uniques et de mieux comprendre l'histoire de notre monde. Je suis ravi de voir des innovations comme celle-ci émerger dans le monde de la plongée, car cela peut aider les archéologues sous-marins à découvrir de nouveaux trésors et à préserver notre patrimoine culturel pour les générations futures."
                </p>
                <p class="slide">
                    "En tant qu'instructeur de plongée, j'ai vu beaucoup de personnes s'initier à la plongée sous-marine et découvrir les merveilles de l'océan. Cependant, beaucoup de débutants ont peur de la bouteille d'oxygène et de l'idée de manquer d'air sous l'eau.<br><br>
                    Le masque innovant qui filtre l'eau pour fournir de l'oxygène est une solution idéale pour les débutants. En utilisant ce masque, ils peuvent se concentrer sur l'exploration sous-marine sans se soucier de leur consommation d'oxygène et de changer les bouteilles d'oxygène.<br><br>
                    Cela permet également aux débutants de plonger en toute confiance et de profiter pleinement de l'expérience. Je suis ravi de voir des innovations comme celle-ci émerger dans le monde de la plongée, car cela peut aider à élargir la communauté de la plongée et à rendre cette activité plus accessible pour tous."
                </p>

                <p class="slide">
                    "En tant que biologiste marin, je suis passionné par l'étude de la vie marine et la compréhension de son rôle crucial dans notre écosystème. Cependant, les bouteilles d'oxygène traditionnelles limitent la durée de mes plongées et m'empêchent d'observer de manière approfondie la vie marine.<br><br>
                    Le masque innovant qui filtre l'eau pour fournir de l'oxygène est une solution idéale pour moi. En utilisant ce masque, je peux prolonger mes plongées et observer la vie marine sans perturbation ni interruption.<br><br>
                    Cela me permet d'observer le comportement des espèces sous-marines dans leur habitat naturel et d'étudier leur rôle dans l'écosystème. Je suis ravi de voir des innovations comme celle-ci émerger dans le monde de la plongée, car cela peut aider les biologistes marins à mieux comprendre notre monde sous-marin complexe et fragile, et à travailler pour sa préservation."
                </p>
            </div>
            <div class="controls">
            <div class="control prev-slide">&#9668;</div>
            <div class="control next-slide">&#9658;</div>
            </div>
        </div>

        <div id="form" class="bloc-newsletter">

            <?php
            
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $formNewsletter = $_REQUEST['type'];
                    if ($formSupprimer == 'newsletter') {
                        $email = $_REQUEST['mail'];
                        $errors = 0;
                        // Vérification des données
                        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            echo '<div class="erreur-mail">L\'email est invalide !</div>';
                            $errors++;
                        }

                        // Parcourir le fichier
                        $file = fopen('files/' . 'email.txt', 'r');
                        while (!feof($file)) {
                            $ligne = trim(fgets($file));

                            if($ligne == $email) {
                                $errors++;
                                echo '<div class="erreur-mail">Cet email a déjà été enregistré.</div>';
                                break;
                            }
                        }

                        fclose($file);

                        // Traitement du formulaire
                        if (empty($errors)) {
                            $file = fopen('files/' . 'email.txt', 'a+');
                            fwrite($file, $email . PHP_EOL);
                            fclose($file);
                            echo '<div class="valid-mail">Votre inscription a bien été prise en compte.</div>';

                        }
                    }
                }
            
            ?>

            <form action="index.php#form" method="post">
            <input type='hidden' value="newsletter" name="type"/>
                <label for="mail">Je souhaite recevoir les newsletters de AquaRespire</label>
                <div class="div-form-newsletter">
                    <input type="email" name="mail" id="mail" placeholder="votre email...">
                    <button type="submit">Valider</button>
                </div>
            </form>
        </div>

    </main>

    <footer>
        <?php include('fragments/footer.php') ?>
    </footer>

    <?php include('fragments/ionicon.php') ?>
</body>
</html>