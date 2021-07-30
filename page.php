<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <?php
            $key= $_POST['key'];
            echo "<title>".$key."</title>";
            
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="mdp-icon.png"/>
        <link rel='stylesheet' href='style-mdp.css'>
    </head>

    <body>
        <?php
            $key=$_POST["key"];
            $id=$_POST["identifiant"];
            $pass=$_POST["password"];
            echo "<h2>".$key."</h2>";
            echo "<p>Identifiant : ".$id."</p>";
            echo "<p>Password : <a id='pass'>".$pass."</a></p>";
           

        ?>
    </body>
    
    

</html>