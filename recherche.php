<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div id="menu">
            <label for="menu-toggle" id="toggle-label"></label><input name="menu-toggle" type="checkbox" id="menu-toggle">
            <nav role="navigation">
                <ul>
                <a href="#"><li>Accueil</li></a>
                    <a href="produit.php"><li>Lister produits</li></a>
                    <a href="recherche1.php"><li>Recherche</li></a>
                    <a href="Fruit.php"><li>Ajouter</li></a>
                    <a href="recherche.php"><li>Autres</li></a>
                </ul>
            </nav>
        </div><!--end #menu -->
</div>
    <p>Veuillez entrer le nom à rechercher:</p>
        <form action="afficheRecherchNom.php" method="POST">
            <input type="text" name="nom" placeholder="Entrer le nom que vous rechercher"/>
            <input type="submit" value="Rechercher" />
            </p>
        </form>

      <p>Veuillez entrer le prix à rechercher</p>
      <form action="afficheRecherchPrix.php" method="POST">
            <input type="number" name="prix" placeholder="Entrer le prix que vous rechercher"/>
            <input type="submit" value="Rechercher" />
            </p>
        </form>

        <p>Veuillez entrer le nom et le prix à rechercher</p>
      <form action="recherchNomPrix.php" method="POST">
            <input type="text" name="nom" placeholder="Entrer le nom que vous rechercher"/>
            <input type="number" name="prix" placeholder="Entrer le prix que vous rechercher"/>
            <input type="submit" value="Rechercher" />
            </p>
        </form>          
</body>
</html>

