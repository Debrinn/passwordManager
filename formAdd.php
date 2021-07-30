<html>
    <head>
        <meta charset="utf-8">
        <title>Envoi de la requête</title>
    </head>
    <body>
        
        <?php
            $name = $_POST['name1'];
            
            $id = $_POST['identifiant'];
            $password = $_POST['password'];
            $alone = "";
            if ($password==$alone){
                $password="0";
            }
            $slash = " ";
            //l'upload de fichier
            $tmpName = $_FILES['file']['tmp_name'];
            $name_file = $_FILES['file']['name'];
            $size = $_FILES['file']['size'];
            $error = $_FILES['file']['error'];
            
            $tabExtension = explode('.', $name_file);
            $extension = strtolower(end($tabExtension));
            
            //fin de l'upload
            $name_file2 = $name.".".$extension;
            echo $name_file2."<br>";
            move_uploaded_file($tmpName, './logos/'.$name_file2);
            $message1 =  "Le compte de ";
            $message2 = " a bien été ajouté à la base de donnée";
            $all_message = $message1 . $name . $message2;
            echo $all_message;
            $id_pass = $name . $slash . $id . $slash . $password .$slash.$name_file2;
           
            $tempo_file = 'addTempo.txt';
            file_put_contents($tempo_file,$id_pass);

        ?>
    </body>
</html>