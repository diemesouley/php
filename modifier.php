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
<p>modifier fruits</p>
      <form action="modifier.php" method="POST">
      <input type="text" placeholder="Entrer le nom" name="nom" required/>
            <input type="number" placeholder="Entrer le prix" name="prix" required/>
            <input type="number" placeholder="Entrer la quantite" name="quantite" required/>
            <input type="submit" value="Modifier"/>
        </form>      


<h3>Liste des fruits</h3>

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
       
       $nom=$_POST['nom'];
       $nom=strtolower($nom);
       $prix=$_POST['prix'];
       $quantite=$_POST['quantite'];      
       $nom=$_POST['nom'];
       for ($i=0; $i < count($fruit); $i++ ){ 
        if($nom==$fruit[$i]['nom']){
           $fruit[$i]=array('nom'=>$nom,'prix'=>$prix,'quantite'=>$quantite,'montant'=>$prix*$quantite);
        }
       } 
        

       $nom=$_POST['nom'];
       $nom=strtoupper($nom);
       $prix=$_POST['prix'];
       $quantite=$_POST['quantite'];
   $b=array('nom'=>$nom,'prix'=>$prix,'quantite'=>$quantite,'montant'=>$prix*$quantite);
   //array_push($fruit,$b);
   
   $max=sizeof($fruit);
   echo '<table border="1"><thead><tr><th>Nom</th><th>Prix</th><th>Quantite</th><th>Montant</th></tr></thead></tbody>';
   for($i=0; $i<$max; $i++) { 
   
   while (list ($key, $val) = each ($fruit[$i])) { 
       echo '<td>'.$val.'</td>';
   } // inner array while loop
   echo '</tr>';
   } // outer array for loop
?>
        </tbody>
                   </table>
                  
</body>
</html>