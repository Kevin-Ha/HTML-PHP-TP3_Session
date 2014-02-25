<html>
    <?php
    session_start();
    ?>
    <head>
        <meta charset="UTF-8">
        <title>Déconnexion</title>
        
    </head>
    <body>
        <h1><center>Vous êtes maintenant déconnecté.</center></h1>
        <?php

             session_destroy();
            
        ?>
        <form action="index.php" />
        <input id="OK" type="submit" name="OK" />
    </body>
</html>


