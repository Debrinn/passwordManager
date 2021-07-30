<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PassWords</title>
        <link rel='stylesheet' href='style-mdp.css'>
        <link rel="icon" type="image/png" href="mdp-icon.png"/>
    </head>
    <body>
        <h1>Gestionnaire de MDP</h1>
        <div class="add">
            
            <button id='button-new' onclick="window.location.href = 'add.html';">+</button>
            
        </div><hr>

        <?php 
            
            $file='account.json';
            $json_account = file_get_contents($file);
            $keys = array();
            $php_account=json_decode($json_account);
            
            foreach($php_account as $key => $value){
                $keys[]= $key;
                //echo $key;
                $id_psw = array();
                foreach($value as $infos_name =>$infos){
                    
                    $id_psw[]=$infos;
                    
                }
                $vir="<br>";    
                //echo $id_psw[0];
                //echo $id_psw[1];
                $id=$id_psw[0];
                $password=$id_psw[1];
               // echo $id_psw[2];
                $input1="<input type='hidden' id='key' name='key' value='".$key."'>";
                $input2="<input type='hidden' id='identifiant' name='identifiant' value='".$id."'>";
                $input3="<input type='hidden' id='password' name='password' value='".$password."'>";
                $submit="<input type='submit' value='SHOW PASS'/></p>";
                $form="<form action='page.php' method='POST'>".$input1.$input2.$input3.$submit."</form>";
                $img="<p><img src='logos/".$id_psw[2]."'>";
                echo "<div class='id_card'><h2>" . $key . "</h2>".$img.$form."</div><hr>";

            }


        ?>
        <script src='javascript.js'></script>
        
    </body>
</html>