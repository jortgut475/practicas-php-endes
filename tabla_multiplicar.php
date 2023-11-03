<h1>
    <?php
    #phpinfo();
    $numero=$_GET['numero'];

    if($numero>=1 &&  $numero<=10) {
        echo "<h2>Tabla de la multiplicar 
        del $numero:</h2>";
        for($i=1;$i<=10;$i++){
            $resultado=$numero*$i;
            echo"$numero x $i =$resultado<br>";
        }
    }else{
        echo "Por favor ingrese un nº entre 1 y 10";
    }
    ?>
</h1>