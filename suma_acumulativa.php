<h1>
    <?php
    #phpinfo();
    $numero=$_GET['numero'];
    $suma=0;

    for( $i= 1; $i <=$numero; $i++) {
        $suma +=$i;
    }
    echo "La suma acumulativa es $suma";
    ?>
</h1>