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
<?php
    $fruit=array(
        array('nom'=>'Pomme','prix'=>1000,'quantite'=>100,'montant'=>100000),
        array('nom'=>'Banane','prix'=>1000,'quantite'=>100,'montant'=>100000),
        array('nom'=>'Orange','prix'=>1000,'quantite'=>100,'montant'=>100000),
        array('nom'=>'Mangue','prix'=>1000,'quantite'=>100,'montant'=>100000),
        array('nom'=>'Poivre','prix'=>1000,'quantite'=>100,'montant'=>100000),
        array('nom'=>'Carassole','prix'=>1000,'quantite'=>100,'montant'=>100000),
        array('nom'=>'Goyave','prix'=>1000,'quantite'=>100,'montant'=>100000),
        array('nom'=>'Ananas','prix'=>1000,'quantite'=>100,'montant'=>100000),
        array('nom'=>'Fraise','prix'=>1000,'quantite'=>100,'montant'=>100000),
        array('nom'=>'Grenade','prix'=>1000,'quantite'=>100,'montant'=>100000)
       ); 
?>
   <?php
            echo '<table border="1"><thead><tr><th>Nom</th><th>Prix</th><th>Quantite</th><th>Montant</th></tr></thead></tbody>';

        $nom=$_POST['nom'];
        if (isset($_POST['nom'])){
            foreach($fruit  as $array => $arr)
	        if ($arr['nom'] == $nom){
                foreach ($arr as $key => $value) {
                    echo '<td>'.$value.'</td>';
                }
                echo '</tr>';
        }
    
        ECHO'</tbody>';
        ECHO'</table>';
          }
          else{
            echo 'la valeur '.$nom.' ne se trouve pas dans le tableau';

          }
            
        ?>  
</body>
</html>