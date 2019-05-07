<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
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
                    <a href="Fruit.php"><li>Mise à jour</li></a>
                </ul>
            </nav>
        </div><!--end #menu -->
</div>
<?php
   $fruit=array(
    array('nom'=>'Pomme','prix'=>1000,'quantite'=>9,'montant'=>9000),
    array('nom'=>'Banane','prix'=>1000,'quantite'=>150,'montant'=>150000),
    array('nom'=>'Orange','prix'=>1000,'quantite'=>300,'montant'=>300000),
    array('nom'=>'Mangue','prix'=>1000,'quantite'=>5,'montant'=>5000),
    array('nom'=>'Poivre','prix'=>1000,'quantite'=>90,'montant'=>90000),
    array('nom'=>'Carassole','prix'=>1000,'quantite'=>500,'montant'=>500000),
    array('nom'=>'Goyave','prix'=>1000,'quantite'=>800,'montant'=>800000),
    array('nom'=>'Ananas','prix'=>1000,'quantite'=>95,'montant'=>95000),
    array('nom'=>'Fraise','prix'=>1000,'quantite'=>3,'montant'=>3000),
    array('nom'=>'Grenade','prix'=>1000,'quantite'=>1000,'montant'=>100000)
   ); 
       $montant = $prix*$quantite;
?>
  <p>Liste des Fruits</p>
   <table border= 5>
   <tr>
   <th> fruit</th>
   <th>prix</th>
   <th>quantite</th>
   <th>montant</th>
   </tr>
   
   <?php
      for($i=0; $i<count($fruit); $i++) {
        if ($fruit[$i]['quantite']<10){
        
        
          echo "<tr class='rouge'>
         <td>" . $fruit[$i]["nom"] . "</td>
         <td>" . $fruit[$i]['prix'] . "</td>
         <td>" . $fruit[$i]["quantite"] . "</td>
         <td>" . $fruit[$i]['prix']*$fruit[$i]["quantite"]. "</td>
     </tr>";
       }
       else {
        echo "<tr>
        <td>" . $fruit[$i]["nom"] . "</td>
        <td>" . $fruit[$i]['prix'] . "</td>
        <td>" . $fruit[$i]["quantite"] . "</td>
        <td>" . $fruit[$i]['prix']*$fruit[$i]["quantite"]. "</td>
    </tr>";
       }
      }

     ?>
     </table>
</body>
</html>