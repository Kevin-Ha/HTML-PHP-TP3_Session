
<?php
      define('USER_LOGIN', 'admin');
      define('USER_MDP', 'azerty');
       
       if (empty($_POST) == false) {
           if($_POST['login'] == USER_LOGIN && $_POST['mdp'] == USER_MDP) {
               
               //Démarrer le service.
               session_start();
               //Stocke un indicateur en session
               $_SESSION['auth'] = true;
               // Redirige le visiteur
               header('Location: Page1.php');
               
       }else {
           
           $error = true;
       }
       
       }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" /> 
        <meta charset="UTF-8">
        
        <title>Session</title>
    </head>
    <body>
        <h1 style="text-align:center">Authentification</h1>
        <?php
        if (isset($error) == true) {
            echo '<p style="color : red;" >Authentification incorrecte.</p>';
            }
        ?>
        <form method="post" action="" enctype="multipart/form-data">
        <div>
        <label for="login" >Identifiant :</label>
        
        <input id="login" type="text" name="login" />
        </div>
            
        <div>
        <label for="mdp">Mot de passe :</label>
        <input id="mdp" type="password" name="mdp" />  
        <input type="submit" name="Submit" value="Se connecter">
        </div>
        </form>
<!--        <p><a href="Page1.php">Continuer</a></p>-->
       
    </body>
</html>



