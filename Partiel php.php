<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 
        <title>Multiplication</title>
 
    </head>
 
    <body>
 
        <div>
            <h3>Entre un chiffre</h3>
            <form action="" method="post">
 
                <input type="number" value="" name="chiffre" /><br /><br />
                <button id="mysubmit" type="submit">envoyer
                </button><br />
 
            </form>
        </div>
 
        <?php
            if(isset($_POST['chiffre'])){
                $chiffre = $_POST['chiffre'];
                echo "table de : <br />";
                for($i = 1; $i<11; $i++){
                    echo $chiffre . "x" . $i . "=" . $chiffre * $i . "<br />";
                }
            }else{
                echo "pas encore de chiffre entrée";
            }
        ?>
 
    </body>
</html>