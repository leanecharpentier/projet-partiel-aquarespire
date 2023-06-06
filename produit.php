<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('fragments/head.php') ?>
    <title>Produit</title>
</head>
<body class="body-produit">
    <header>
        <?php include('fragments/header.php') ?>
    </header>

    <main>
        <h1 class="titre-produit">Partez à la découverte des océans<br>et respirez comme un poisson<br>grâce à nos masques AquaRespire</h1>
        
        <div class="box-presentation-produit">
            <div class="presentation-produit">
                <div class="image-produit">
                    <img class="image-masque" src="images/masque2.png" alt="">
                    <p class="prix">200€</p>
                </div>
                <div class="texte-produit">
                    <h2 class="titre-masque">Masque AquaRespire</h2>
                    <p class="texte-masque">
                        AquaRespire est une masque qui vous permet de respirer dans l’eau. En effet, il est équipé d’un système qui filtre l’eau afin de récupérer uniquement l’oxygène pour que vous puissiez respirer. Cela fonctionne comme les branchies des poissons.<br><br>
                        Ce masque vous permet d’explorer les profondeurs de l’océan aussi longtemps que vous le souhaitez : pas besoin de remonter à la surface pour changer votre bouteille d’oxygène.
                    </p>
                    <div class="bouton">
                        <a id="btn-ajouter-panier" class="btn-ajouter-panier">Ajouter au panier</a>
                        <ion-icon id="icon-coeur-vide" name="heart-outline"></ion-icon>
                        <ion-icon class="hidden" id="icon-coeur-plein" name="heart"></ion-icon>
                    </div>
                    <div id="modal-ajouter-panier">

                        <?php 
                        
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $valeur = $_REQUEST['ajouter'];
                            $formAjouter = $_REQUEST['type'];
                                if ($formAjouter == 'add') {
                                    if ($valeur == 'Oui') {
                                        $file = fopen('files/' . 'panier.txt', 'a+');
                                        fwrite($file, 'masque' . PHP_EOL);
                                        fclose($file);
                                        header("Refresh:0");
                                    }
                                }
                        }
                        
                        ?>

                        <form action="produit.php" method="post">
                            <input type='hidden' value="add" name="type"/>
                            <label for="ajouter">Voulez-vous ajouter le masque AquaRespire au panier ?</label>
                            <div class="bloc-form">
                                <select name="ajouter" id="ajouter">
                                    <option value="">Oui ou non ?</option>
                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non</option>
                                </select>

                                <button id="btn-valider" type="submit">Valider</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

       
        <div class="naissance-projet">
            <h2 class="titre-naissance">Comment est née cette idée ?</h2>
            <p class="texte-naissance">
            Passionnée par les océans depuis mon enfance, j'ai développé une passion pour la plongée sous-marine. Cependant, l'utilisation de bouteilles d'oxygène limitait ma liberté de mouvement et m'empêchait de rester sous l'eau aussi longtemps que je le souhaitais.<br>
            C'est en me rappelant la plante Branchiflore dans Harry Potter, qui permet de respirer sous l'eau, que j'ai eu l'idée de créer un masque qui fonctionne de la même manière. Après des mois de recherche et de développement, j'ai créé un masque innovant qui permet de respirer sous l'eau aussi longtemps que nécessaire, sans les contraintes des bouteilles d'oxygène.<br>
            Mon masque est sûr et facile à utiliser, et offre une expérience de plongée immersive et unique. Je suis fière de contribuer ainsi à la préservation des océans et de leur environnement.
            </p>
        </div>

        <div class="harry-potter">
            <img class="image-hp" src="images/harry-potter.webp" alt="">
            <p class="texte-hp">
                La Branchiflore est une plante magique permettant de respirer sous l'eau. Elle agit sur l'anatomie en dotant les mains et les pieds de palmes et des branchies apparaissent sur les côtés du cou. Son effet n'est que temporaire et Harry Potter en teste les limites quand il retrouve son apparence naturelle alors qu'il est encore dans les eaux du lac de Poudlard, lors du tournoi des Trois Sorciers.
            </p>
        </div>

    </main>

    <footer>
        <?php include('fragments/footer.php') ?>
    </footer>
    <?php include('fragments/ionicon.php') ?>
</body>
</html>