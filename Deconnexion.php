<html>
    <?php
    session_start();
    ?>
    <head>
        <meta charset="UTF-8">
        <title>Déconnexion</title>
        
    </head>
    <body>
        <h1><center>Vous êtes maintenant déconnêcté.</center></h1>
        <?php

             session_destroy();
            
        ?>
    </body>
</html>


