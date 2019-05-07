
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css">
        <script src="main.js"></script>
    </head>
    <body>
  
    <?php
     $Utilisateur = array(
        1=>array('nom'=>'Ousmane','Login'=>'Diop','Password'=>'Diop123'),
         2=>array('nom'=>'Souleymane','Login'=>'DIEME','Password'=>'DIEME123')
           );
        $Login=$_POST['Login'];
        $Password=$_POST['Password'];
        
        if(isset($_POST['Login']) AND isset($_POST['Password']) 
        AND $Login==$Utilisateur[2]['Login'] AND $_POST['Password']==$Utilisateur[2]['Password'] XOR 
        $Login==$Utilisateur[1]['Login'] AND $_POST['Password']==$Utilisateur[1]['Password']){
         
           header("location:accueil.php");
        }else{
           
            header("location:formAuth.php");
            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
    ?>

    </body>
</html>