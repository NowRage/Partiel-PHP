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
 
                <label>Chiffre</label>
                <input type="number" value="" name="monchiffre" /><br /><br />
                <button id="mysubmit" type="submit">envoyer</button><br />
 
            </form>
        </div>
 
        <?php
        $i = 0;
        $total=0;
            if(isset($_POST['monchiffre'])){
                $monchiffre = $_POST['monchiffre'];
                echo "La somme successive est: <br />";
                while( $i<=$monchiffre){
                 $total = $total + $i ;
                 $i= $i + 1   ;
            
                 echo $total ."<br />" ;
                }

            }
            
        ?>
 
    </body>
</html>