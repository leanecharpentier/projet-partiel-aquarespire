<nav class="nav-bar">
    <a href="index.php"><img class="logo-header" src="images/logo_header.png" alt=""></a>
    <ul class="nav-icon">
        <li id="favoris"><ion-icon name="heart-outline"></ion-icon></li>
        <li id="panier"><ion-icon name="bag-remove-outline"></ion-icon></li>
        <li id="menu-burger"><ion-icon name="menu-outline"></ion-icon></li>
    </ul>
</nav>

<div id="nav-burger">
    <ul class="nav-burger">
        <li><a href="index.php">Home</a></li>
        <li><a href="produit.php">Produit</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</div>

<div id="modal-panier" class="hidden">
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $formSupprimer = $_REQUEST['type'];
                if ($formSupprimer == 'delete') {
                    unlink('files/panier.txt');
                    $file = fopen('files/panier.txt', 'w');
                    fclose($file);
                }
        }

        $nb = 0;

        if (file_exists('files/panier.txt')) {
            $panier = [];
            $file = fopen('files/panier.txt', 'r');
            while (!feof($file)) {
                $ligne = trim(fgets($file));
                if (!empty($ligne)) {
                    array_push($panier, $ligne);
                }
            }

            $nb = count($panier);
        }
    
        if ($nb==0) {
            echo '<p>Votre panier est vide</p>';
        } else if ($nb==1) {
            echo '<p>1 masque AquaRespire<p>';
        } else {
            echo '<p>' . $nb . ' masques AquaRespire<p>';
        }
    ?>
    
    <div class="line"></div>

    <?php
    
        echo '<p>Total de votre commande : ' . 200*$nb . '€</p>';
    
    ?>

    <form action="produit.php" method="post">
        <input type='hidden' value="delete" name="type"/>
        <button id="btn-vider-panier" type="submit">Vider le panier</button>
    </form>
</div>

<div id="modal-favoris" class="hidden">
    <p>Vous n'avez aucun article en favoris</p>
</div>

<div id="overlay"></div>


