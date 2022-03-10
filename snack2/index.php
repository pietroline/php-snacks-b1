<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

    $check = 0;
    
    

    $name = $_GET["name"];
    // name è più lungo di 3 caratteri?
    if(strlen($name) > 3){
        $nameError = "";
        $check++;
    }else{
        $nameError = "(Error! Invalid value!)";
    }


    // email contiene almeno un punto e la @?
    $mail = $_GET["mail"];
    if(strpos($_GET["mail"], ".") && strpos($_GET["mail"], "@")){
        $mailError = "";
        $check++;
    }else{
        $mailError = "(Error! Invalid value!)";
    }

        
    
    // age è un numero?
    $age = $_GET["age"];
    if(is_numeric($_GET["age"])){
        $ageError = "";
        $check++;
    }else{
        $ageError = "(Error! Invalid value!)";
    }


    //controllo finale
    if($check == 3){
        $login = "accesso riuscito";
    }else{
        $login = "accesso negato";
    }
?>







<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <div>
            <span>Nome inserito: </span>
            <span>
                <?php echo $name ?>
            </span>
            <span style="color:red;">
                <?php echo $nameError ?>
            </span>
        </div>

        <div>
            <span>Email inserita: </span>
            <span>
                <?php echo $mail ?>
            </span>
            <span style="color:red;">
                <?php echo $mailError ?>
            </span>
        </div>

        <div>
            <span>Età inserita: </span>
            <span>
                <?php echo $age ?>
            </span>
            <span style="color:red;">
                <?php echo $ageError ?>
            </span>
        </div>

        <b>
            <?php echo $login ?>  
        </b>
        
    </body>

</html>